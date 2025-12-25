<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;


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
    public function updateStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = $request->status;
        $transaction->save();

        return back()->with('success', 'Status berhasil diupdate');
    }
}
