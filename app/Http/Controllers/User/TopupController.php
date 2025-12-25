<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    // Halaman detail game + list nominal
    public function showGame($id)
    {
        $game = Game::findOrFail($id);

        $products = Product::where('game_id', $id)->get();

        return view('user.games.detail', compact('game', 'products'));
    }

    // Proses checkout
    public function checkout(Request $request)
    {
        $request->validate([
            'product_id'   => 'required',
            'game_account' => 'required'
        ]);

        Transaction::create([
            'user_id'      => session('user_id'),
            'product_id'   => $request->product_id,
            'game_account' => $request->game_account,
            'status'       => 'pending'
        ]);

        return redirect('/user/dashboard')
            ->with('success', 'Top up berhasil dibuat, menunggu verifikasi');
    }
}
