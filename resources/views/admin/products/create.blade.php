@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Produk Top Up</h3>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <!-- Pilih Game -->
        <div class="mb-3">
            <label class="form-label">Game</label>
            <select name="game_id" class="form-control" required>
                <option value="">-- Pilih Game --</option>
                @foreach ($games as $game)
                    <option value="{{ $game->id }}">
                        {{ $game->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Nama Nominal -->
        <div class="mb-3">
            <label class="form-label">Nama Nominal</label>
            <input type="text" name="name" class="form-control"
                   placeholder="Contoh: 86 Diamonds" required>
        </div>

        <!-- Harga -->
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="price" class="form-control"
                   placeholder="Contoh: 20000" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
