@extends('layouts.admin')

@section('content')
<style>
    body {
        background: radial-gradient(circle at top, #020617, #000);
    }

    .card-neon {
        background: #020617;
        border-radius: 18px;
        border: 1px solid rgba(56,189,248,.25);
        box-shadow: 0 0 35px rgba(56,189,248,.2);
    }

    .table thead th {
        background: rgba(15,23,42,.95);
        color: #38bdf8;
        font-size: .75rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        border: none;
    }

    .table tbody tr:hover {
        background: rgba(56,189,248,.08);
        transition: .3s;
    }

    .btn-neon {
        background: linear-gradient(45deg, #38bdf8, #0ea5e9);
        border: none;
        color: #000;
        font-weight: bold;
    }

    .btn-neon:hover {
        opacity: .9;
    }

    .page-title {
        letter-spacing: .12em;
    }
</style>

<div class="container py-5">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-info page-title">
                <i class="bi bi-box-seam"></i> KELOLA PRODUK
            </h3>
            <p class="text-secondary mb-0">
                Atur daftar produk top up game
            </p>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ url('/admin/dashboard') }}"
               class="btn btn-outline-info fw-semibold">
                <i class="bi bi-arrow-left"></i> Dashboard
            </a>

            <a href="{{ route('products.create') }}"
               class="btn btn-neon">
                <i class="bi bi-plus-circle"></i> Tambah Produk
            </a>
        </div>
    </div>

    <!-- CARD -->
    <div class="card card-neon p-4">

        <table class="table table-dark table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td class="fw-semibold text-info">
                            {{ $item->name }}
                        </td>

                        <td>
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </td>

                        <td class="text-center">
                            <a href="{{ route('products.edit', $item->id) }}"
                               class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('products.destroy', $item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Hapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-secondary py-4">
                            <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                            Belum ada produk
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

</div>
@endsection
