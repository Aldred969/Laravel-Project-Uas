@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <!-- JUDUL + TOMBOL -->
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
         <a href="{{ route('products.create') }}"
                class="btn btn-info fw-bold">
                    + Tambah Game
             </a>
        </div>
    </div>

    <!-- CARD TABLE -->
    <div class="card bg-black border-info">
        <div class="card-body">

            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($products as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>
                                <!-- EDIT -->
                                <a href="{{ route('products.edit', $item->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <!-- HAPUS -->
                                <form action="{{ route('products.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Hapus produk ini?')">
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
                                Belum ada data produk
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection
