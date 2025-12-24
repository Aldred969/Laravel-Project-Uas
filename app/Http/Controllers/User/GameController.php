<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        // 🔐 Proteksi manual (sesuai sistem kamu)
        if (!session()->has('user_id') || session('role') != 'user') {
            return redirect('/login');
        }

        // Ambil semua game
        $games = Game::all();

        return view('user.games.index', compact('games'));
    }
}
