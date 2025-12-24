<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Game | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">

    <h3 class="fw-bold text-info mb-4">Edit Game</h3>

    <div class="card bg-black border-info">
        <div class="card-body">

            <form action="{{ route('admin.games.update', $game->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $game->id }}">
                <!-- NAMA GAME -->
                <div class="mb-3">
                    <label class="form-label">Nama Game</label>
                    <input type="text"
                           class="form-control bg-dark text-white border-secondary"
                           name="name"
                           value="{{ $game->name }}"
                           required>
                </div>

                <!-- GAMBAR SAAT INI -->
                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label><br>
                    @if ($game->image)
                        <img src="{{ asset('images/games/'.$game->image) }}"
                             width="120"
                             class="rounded border">
                    @else
                        <span class="text-secondary">Belum ada gambar</span>
                    @endif
                </div>

                <!-- GANTI GAMBAR -->
                <div class="mb-3">
                    <label class="form-label">Ganti Gambar</label>
                    <input type="file"
                           class="form-control bg-dark text-white border-secondary"
                           name="image"
                           accept="image/*">
                </div>

                <!-- DESKRIPSI -->
                <div class="mb-4">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description"
                              class="form-control bg-dark text-white border-secondary"
                              rows="4">{{ $game->description }}</textarea>
                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn btn-info fw-bold">
                    Update
                </button>
                <a href="{{ route('admin.games.index') }}"
                   class="btn btn-secondary ms-2">
                    Batal
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
