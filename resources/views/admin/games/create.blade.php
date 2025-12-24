<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Game | Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">

    <!-- JUDUL -->
    <div class="mb-4">
        <h3 class="fw-bold text-info">Tambah Game Baru</h3>
        <a href="{{ route('admin.games.index') }}" class="btn btn-sm btn-secondary mt-2">
            ← Kembali
        </a>
    </div>

    <!-- CARD FORM -->
    <div class="card bg-black border-info">
        <div class="card-body">

            <form action="{{ route('admin.games.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <!-- NAMA GAME -->
                <div class="mb-3">
                    <label class="form-label">Nama Game</label>
                    <input type="text"
                           name="name"
                           class="form-control bg-dark text-white border-secondary"
                           value="{{ old('name') }}"
                           required>
                </div>

                <!-- DESKRIPSI -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description"
                              class="form-control bg-dark text-white border-secondary"
                              rows="4">{{ old('description') }}</textarea>
                </div>

                <!-- GAMBAR -->
                <div class="mb-4">
                    <label class="form-label">Gambar Game</label>
                    <input type="file"
                           name="image"
                           class="form-control bg-dark text-white border-secondary"
                           accept="image/*"
                           required>
                </div>

                <!-- BUTTON -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-info fw-bold">
                        Simpan
                    </button>
                    <a href="{{ route('admin.games.index') }}" class="btn btn-danger">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
