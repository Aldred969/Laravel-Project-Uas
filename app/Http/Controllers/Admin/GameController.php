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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required',
            'description' => 'nullable',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        $game = Game::findOrFail($id);

        $game->name = $request->name;
        $game->description = $request->description;

        if ($request->hasFile('image')) {

            $oldPath = public_path('images/games/'.$game->image);
            if ($game->image && file_exists($oldPath)) {
                unlink($oldPath);
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/games'), $imageName);
            $game->image = $imageName;
        }

        $game->save();

        return redirect()->route('admin.games.index')
            ->with('success', 'Game berhasil diupdate');
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
