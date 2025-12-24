@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h4 class="text-info">Detail Transaksi</h4>

    <ul class="list-group mb-3">
        <li class="list-group-item">User: {{ $transaction->user->name }}</li>
        <li class="list-group-item">Game: {{ $transaction->product->game->name }}</li>
        <li class="list-group-item">Produk: {{ $transaction->product->name }}</li>
        <li class="list-group-item">User ID Game: {{ $transaction->game_account }}</li>
        <li class="list-group-item">Status: {{ $transaction->status }}</li>
    </ul>

    <form method="POST" action="/admin/transactions/update-status">
        @csrf
        <input type="hidden" name="id" value="{{ $transaction->id }}">

        <select name="status" class="form-select mb-2">
            <option value="pending">Pending</option>
            <option value="success">Success</option>
            <option value="failed">Failed</option>
        </select>

        <button class="btn btn-info w-100">
            Update Status
        </button>
    </form>
</div>
@endsection
