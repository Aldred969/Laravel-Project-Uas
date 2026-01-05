@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h4 class="text-info mb-4">Data Transaksi</h4>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>User</th>
                <th>Game</th>
                <th>Produk</th>
                <th>User ID Game</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $t)
            <tr>
                <td>{{ $t->user->name }}</td>
                <td>{{ $t->product->game->name }}</td>
                <td>{{ $t->product->name }}</td>
                <td>{{ $t->game_account }}</td>
                <td>
                    <span class="badge bg-warning">{{ $t->status }}</span>
                </td>
                <td>
                    <a href="/admin/transactions/{{ $t->id }}" class="btn btn-info btn-sm">
                        Detail
                    </a>
                    <form action="{{ route('admin.transactions.destroy', $t->id) }}"
                          method="POST"
                          class="d-inline"
                          onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
