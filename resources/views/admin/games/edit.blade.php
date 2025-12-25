@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <!-- JUDUL -->
    <div class="mb-4">
        <h3 class="fw-bold text-info">Edit Game</h3>
    </div>

    <!-- CARD FORM -->
    <div class="card bg-black border-info">
        <div class="card-body">

            <form action="{{ route('admin.games.update', $game->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- NAMA GAME -->
                <div class="mb-3">
                    <label class="form-label">Nama Game</label>
                    <input type="text"
                           name="name"
                           class="form-control bg-dark text-white border-secondary"
                           value="{{ $game->name }}"
                           required>
                </div>

                <!-- GAMBAR SAAT INI -->
                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label><br>
                    @if ($game->image)
                        <img src="{{ asset('images/games/'.$game->image) }}"
                             width="120"
                             class="rounded border mt-2">
                    @else
                        <span class="text-secondary">Belum ada gambar</span>
                    @endif
                </div>

                <!-- GANTI GAMBAR -->
                <div class="mb-3">
                    <label class="form-label">Ganti Gambar</label>
                    <input type="file"
                           name="image"
                           class="form-control bg-dark text-white border-secondary"
                           accept="image/*">
                </div>

                <!-- DESKRIPSI -->
                <div class="mb-4">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description"
                              rows="4"
                              class="form-control bg-dark text-white border-secondary">{{ $game->description }}</textarea>
                </div>

                <!-- BUTTON -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-info fw-bold">
                        Update
                    </button>
                    <a href="{{ route('admin.games.index') }}"
                       class="btn btn-danger">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
