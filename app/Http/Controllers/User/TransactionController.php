<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // ======================
    // RIWAYAT TRANSAKSI USER
    // ======================
    public function index()
    {
        if (!session()->has('user_id') || session('role') !== 'user') {
            return redirect('/login');
        }

        $transactions = Transaction::with('product.game')
            ->where('user_id', session('user_id'))
            ->latest()
            ->get();

        return view('user.riwayat', compact('transactions'));
    }

    // ======================
    // SIMPAN TRANSAKSI BARU
    // (Beli Sekarang)
    // ======================
    public function store(Request $request)
    {
        if (!session()->has('user_id') || session('role') !== 'user') {
            return redirect('/login');
        }

        // Validasi input
        $request->validate([
            'game_id'      => 'required|integer',
            'product_id'   => 'required|integer',
            'game_account' => 'required|string',
            'total_price'  => 'required|numeric',
        ]);

        // Simpan transaksi
        Transaction::create([
            'user_id'      => session('user_id'),
            'game_id'      => $request->game_id,
            'product_id'   => $request->product_id,
            'game_account' => $request->game_account,
            'total_price'  => $request->total_price,
            'status'       => 'pending',
        ]);

        return redirect('/user/riwayat')
            ->with('success', 'Transaksi berhasil dibuat');
    }

    // ======================
    // BATALKAN TRANSAKSI
    // ======================
    public function cancel($id)
    {
        $transaction = Transaction::where('id', $id)
            ->where('user_id', session('user_id'))
            ->where('status', 'pending')
            ->firstOrFail();

        $transaction->status = 'failed';
        $transaction->save();

        return back()->with('success', 'Transaksi berhasil dibatalkan');
    }
}