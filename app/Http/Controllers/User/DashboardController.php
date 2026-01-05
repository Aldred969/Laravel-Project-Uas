<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('user_id') || session('role') !== 'user') {
            return redirect('/login');
        }

        $games = Game::all();
        return view('user.dashboard', compact('games'));
    }
}
