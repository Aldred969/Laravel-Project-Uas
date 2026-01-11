<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        //validasi sesi user
        if (!session()->has('user_id') || session('role') != 'user') {
            return redirect('/login');
        }

        // Ambil semua game
        $games = Game::all();

        return view('user.games.index', compact('games'));
    }

    public function show($id)
    {
        $game = Game::with('products')->findOrFail($id);
        return view('user.games.show', compact('game'));
    }
}
