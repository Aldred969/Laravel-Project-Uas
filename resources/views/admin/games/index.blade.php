<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Game | Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

        <div class="container mt-5">

            <!-- JUDUL + TOMBOL TAMBAH -->
            <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-info">Kelola Game</h3>

            <div class="d-flex gap-2">
                <!-- KEMBALI KE DASHBOARD -->
                <a href="{{ url('/admin/dashboard') }}"
                class="btn btn-secondary fw-bold">
                    ← Kembali
                </a>

                <!-- TAMBAH GAME -->
                <a href="{{ route('admin.games.create') }}"
                class="btn btn-info fw-bold">
                    + Tambah Game
                </a>
            </div>
        </div>


    <!-- ALERT SUCCESS -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- TABEL GAME -->
    <div class="card bg-black border-info">
        <div class="card-body">

            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Game</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($games as $game)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $game->name }}</td>
                            <td>{{ $game->description ?? '-' }}</td>
                            <td>
                                @if ($game->image)
                                    <img src="{{ asset('images/games/'.$game->image) }}"
                                         width="60"
                                         class="rounded">
                                @else
                                    <span class="text-secondary">-</span>
                                @endif
                            </td>
                            <td>
                                <!-- EDIT -->
                                <a href="{{ route('admin.games.edit', $game->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <!-- HAPUS -->
                                <form action="{{ route('admin.games.destroy', $game->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus game ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-secondary">
                                Belum ada data game
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
