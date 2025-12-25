<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Transaksi Saya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f0f1a;
            color: white;
        }
        .card {
            background: #14142b;
            border: none;
        }
        .badge {
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <h3 class="mb-4 text-info">Riwayat Transaksi Saya</h3>

    <div class="card p-4">
        <table class="table table-dark table-hover align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Game</th>
                    <th>Nominal</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($transactions as $trx)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $trx->product->game->name ?? '-' }}</td>

                    <td>{{ $trx->product->name ?? '-' }}</td>

                    <td>
                        Rp {{ number_format($trx->product->price ?? 0, 0, ',', '.') }}
                    </td>

                    <td>
                        @if ($trx->status == 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif ($trx->status == 'diproses')
                            <span class="badge bg-info">Diproses</span>
                        @elseif ($trx->status == 'sukses')
                            <span class="badge bg-success">Sukses</span>
                        @elseif ($trx->status == 'dibatalkan')
                            <span class="badge bg-secondary">Dibatalkan</span>
                        @else
                            <span class="badge bg-danger">Ditolak</span>
                        @endif
                    </td>

                    <td>{{ $trx->created_at->format('d M Y H:i') }}</td>

                    <td>
                        @if ($trx->status == 'pending')
                            <form action="/user/riwayat/{{ $trx->id }}/cancel"
                                  method="POST"
                                  onsubmit="return confirm('Batalkan pesanan ini?')">
                                @csrf
                                <button class="btn btn-sm btn-danger">
                                    Batalkan
                                </button>
                            </form>
                        @else
                            <span class="text-secondary small">-</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-secondary">
                        Belum ada transaksi
                    </td>
                </tr>
            @endforelse
            </tbody>

        </table>
    </div>

    <a href="/user/dashboard" class="btn btn-outline-info mt-3">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>