<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Game;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('game')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $games = Game::all();
        return view('admin.products.create', compact('games'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'game_id' => 'required',
            'name'    => 'required',
            'price'   => 'required|numeric'
        ]);

        Product::create([
            'game_id' => $request->game_id,
            'name'    => $request->name,
            'price'   => $request->price
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $games = Game::all();

        return view('admin.products.edit', compact('product', 'games'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'game_id' => 'required',
            'name'    => 'required',
            'price'   => 'required|numeric'
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'game_id' => $request->game_id,
            'name'    => $request->name,
            'price'   => $request->price
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}
