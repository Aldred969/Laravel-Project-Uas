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
    if (!session()->has('user_id')) {
        return redirect('/login');
    }

    $request->validate([
        'product_id'      => 'required|integer',
        'game_account'    => 'required|string',
        'payment_method'  => 'required|string'
    ]);

    Transaction::create([
        'user_id'        => session('user_id'),
        'product_id'     => $request->product_id,
        'game_account'   => $request->game_account,
        'payment_method' => $request->payment_method,
        'status'         => 'pending'
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