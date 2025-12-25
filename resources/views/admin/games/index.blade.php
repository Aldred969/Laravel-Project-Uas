@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <!-- JUDUL + TOMBOL -->
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

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- CARD TABLE -->
    <div class="card bg-black border-info">
        <div class="card-body">

            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Game</th>
                        <th>Deskripsi</th>
                        <th width="10%">Gambar</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($games as $game)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="fw-bold">{{ $game->name }}</td>
                            <td>{{ $game->description ?? '-' }}</td>
                            <td>
                                @if ($game->image)
                                    <img src="{{ asset('images/games/'.$game->image) }}"
                                         width="60"
                                         class="rounded border">
                                @else
                                    <span class="text-secondary">-</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.games.edit', $game->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

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
@endsection
