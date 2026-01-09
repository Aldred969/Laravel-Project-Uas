@extends('layouts.admin')

@section('content')
<div class="container py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-info">
            <i class="bi bi-receipt"></i> Data Transaksi
        </h3>

        <a href="{{ url('/admin/dashboard') }}"
           class="btn btn-outline-info fw-bold">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- CARD -->
    <div class="card bg-dark border-info shadow-lg rounded-4">

        <div class="card-body p-0">

            <table class="table table-dark table-hover align-middle mb-0">
                <thead class="text-info text-uppercase small">
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Game</th>
                        <th>Produk</th>
                        <th>ID Game</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($transactions as $t)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td class="fw-semibold">
                            {{ $t->user->name ?? '-' }}
                        </td>

                        <td class="text-info">
                            {{ $t->product->game->name ?? '-' }}
                        </td>

                        <td>
                            {{ $t->product->name ?? '-' }}
                        </td>

                        <td class="text-warning">
                            {{ $t->game_account }}
                        </td>

                        <td>
                            @if($t->status === 'pending')
                                <span class="badge rounded-pill bg-warning text-dark px-3">
                                    <i class="bi bi-hourglass-split"></i> Pending
                                </span>
                            @elseif($t->status === 'success')
                                <span class="badge rounded-pill bg-success px-3">
                                    <i class="bi bi-check-circle"></i> Success
                                </span>
                            @else
                                <span class="badge rounded-pill bg-danger px-3">
                                    <i class="bi bi-x-circle"></i> Failed
                                </span>
                            @endif
                        </td>

                        <td class="text-center">
                            <a href="{{ route('admin.transactions.show', $t->id) }}"
                               class="btn btn-sm btn-info me-1">
                                <i class="bi bi-eye"></i>
                            </a>

                            <form action="{{ route('admin.transactions.destroy', $t->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')">
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
                        <td colspan="7" class="text-center text-secondary py-5">
                            <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                            Belum ada transaksi
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>

        </div>
    </div>
</div>
@endsection
