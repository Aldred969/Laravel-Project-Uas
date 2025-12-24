@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <h3 class="fw-bold text-info mb-4">Tambah Produk Top Up</h3>

    <div class="card bg-black border-info">
        <div class="card-body">

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <!-- PILIH GAME -->
                <div class="mb-3">
                    <label class="form-label text-white">Game</label>
                    <select name="game_id" class="form-control bg-dark text-white border-secondary" required>
                        <option value="">-- Pilih Game --</option>
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}">
                                {{ $game->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- NAMA NOMINAL -->
                <div class="mb-3">
                    <label class="form-label text-white">Nama Nominal</label>
                    <input type="text"
                           name="name"
                           class="form-control bg-dark text-white border-secondary"
                           placeholder="Contoh: 86 Diamonds"
                           required>
                </div>

                <!-- HARGA -->
                <div class="mb-3">
                    <label class="form-label text-white">Harga</label>
                    <input type="number"
                           name="price"
                           class="form-control bg-dark text-white border-secondary"
                           placeholder="Contoh: 20000"
                           required>
                </div>

                <!-- BUTTON -->
                <div class="mt-4">
                    <button class="btn btn-info fw-bold">
                        Simpan
                    </button>

                    <a href="{{ route('products.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
