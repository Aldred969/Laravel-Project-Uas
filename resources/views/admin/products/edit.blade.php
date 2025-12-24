@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <h3 class="fw-bold text-info mb-4">Edit Produk Top Up</h3>

    <div class="card bg-black border-info">
        <div class="card-body">

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- GAME -->
                <div class="mb-3">
                    <label class="form-label text-white">Game</label>
                    <select name="game_id"
                            class="form-control bg-dark text-white border-secondary"
                            required>
                        <option value="">-- Pilih Game --</option>
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}"
                                {{ $product->game_id == $game->id ? 'selected' : '' }}>
                                {{ $game->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- NAMA PRODUK -->
                <div class="mb-3">
                    <label class="form-label text-white">Nama Produk</label>
                    <input type="text"
                           name="name"
                           class="form-control bg-dark text-white border-secondary"
                           value="{{ $product->name }}"
                           required>
                </div>

                <!-- HARGA -->
                <div class="mb-3">
                    <label class="form-label text-white">Harga</label>
                    <input type="number"
                           name="price"
                           class="form-control bg-dark text-white border-secondary"
                           value="{{ $product->price }}"
                           required>
                </div>

                <!-- BUTTON -->
                <div class="mt-4">
                    <a href="{{ route('products.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-info fw-bold">
                        Update Produk
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
