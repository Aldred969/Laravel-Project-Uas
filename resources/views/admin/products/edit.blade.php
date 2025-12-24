@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="mb-4">Edit Produk</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Game -->
                <div class="mb-3">
                    <label class="form-label">Game</label>
                    <select name="game_id" class="form-control" required>
                        <option value="">-- Pilih Game --</option>
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}"
                                {{ $product->game_id == $game->id ? 'selected' : '' }}>
                                {{ $game->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Nama Produk -->
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="name" class="form-control"
                        value="{{ $product->name }}" required>
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="price" class="form-control"
                        value="{{ $product->price }}" required>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Update Produk
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
