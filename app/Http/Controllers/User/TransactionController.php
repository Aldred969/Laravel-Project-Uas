<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    // Riwayat transaksi user
    public function index()
    {
        $transactions = Transaction::with('product.game')
            ->where('user_id', session('user_id'))
            ->latest()
            ->get();

        return view('user.riwayat', compact('transactions'));
    }

    // Batalkan transaksi (hanya jika pending)
    public function cancel($id)
    {
        $transaction = Transaction::where('id', $id)
            ->where('user_id', session('user_id'))
            ->where('status', 'pending')
            ->firstOrFail();

        $transaction->status = 'cancelled';
        $transaction->save();

        return back()->with('success', 'Transaksi berhasil dibatalkan');
    }
}
