<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    // List transaksi
    public function index()
    {
        $transactions = Transaction::with(['user', 'product.game'])
                            ->latest()
                            ->get();

        return view('admin.transactions.index', compact('transactions'));
    }

    // Detail transaksi
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'product.game'])
                            ->findOrFail($id);

        return view('admin.transactions.show', compact('transaction'));
    }

    // Update status transaksi
    public function updateStatus($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'success';
        $transaction->save();

        return back()->with('success', 'Transaksi berhasil diverifikasi');
    }
}
