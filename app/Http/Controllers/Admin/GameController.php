<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /* =====================
        TAMPILKAN DATA
    ======================*/
    public function index()
    {
        $games = Game::all();
        return view('admin.games.index', compact('games'));
    }

    /* =====================
        FORM TAMBAH
    ======================*/
    public function create()
    {
        return view('admin.games.create');
    }

    /* =====================
        SIMPAN DATA
    ======================*/
    public function store(Request $request)
    {
        // Upload gambar
        $imageName = time().'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('images/games'), $imageName);

        // Simpan ke database
        $game = new Game();
        $game->name        = $request->name;
        $game->description = $request->description;
        $game->image       = $imageName;
        $game->save();

        session()->flash('success', 'Game berhasil ditambahkan');
        return redirect()->route('admin.games.index');
    }

    /* =====================
        FORM EDIT
    ======================*/
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('admin.games.edit', compact('game'));
    }

    /* =====================
        UPDATE DATA
    ======================*/
    public function update(Request $request)
    {
        $game = Game::findOrFail($request->id);

        $game->name        = $request->name;
        $game->description = $request->description;

        // Jika ganti gambar
        if ($request->hasFile('image')) {

            $path = public_path('images/games/'.$game->image);
            if (file_exists($path)) {
                unlink($path);
            }

            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/games'), $imageName);
            $game->image = $imageName;
        }

        $game->save();

        session()->flash('success', 'Game berhasil diupdate');
        return redirect()->route('admin.games.index');
    }

    /* =====================
        HAPUS DATA
    ======================*/
    public function destroy($id)
    {
        $game = Game::findOrFail($id);

        $path = public_path('images/games/'.$game->image);
        if (file_exists($path)) {
            unlink($path);
        }

        $game->delete();

        session()->flash('success', 'Game berhasil dihapus');
        return redirect()->route('admin.games.index');
    }
}
