<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Transaksi | ShiroNeko</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #1a1a2e, #0b0b14);
            color: #e5e7eb;
            min-height: 100vh;
        }

        .card-neon {
            background: #020617;
            border-radius: 18px;
            box-shadow: 0 0 35px rgba(56,189,248,.25);
            border: 1px solid rgba(56,189,248,.15);
        }

        .table thead th {
            background: rgba(15,23,42,.95);
            color: #38bdf8;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .08em;
            border: none;
            padding: 16px;
        }

        .table tbody td {
            padding: 16px;
            border-color: rgba(255,255,255,.06);
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background: rgba(56,189,248,.08);
        }

        .badge-status {
            font-size: .75rem;
            padding: .45em .8em;
            border-radius: 20px;
            font-weight: 600;
        }

        .status-pending { background: rgba(234,179,8,.15); color: #facc15; }
        .status-success { background: rgba(34,197,94,.15); color: #4ade80; }
        .status-failed  { background: rgba(239,68,68,.15); color: #f87171; }

        .btn-cancel {
            background: rgba(239,68,68,.15);
            border: 1px solid rgba(239,68,68,.4);
            color: #f87171;
        }

        .btn-cancel:hover {
            background: rgba(239,68,68,.35);
            color: #fff;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-black shadow">
    <div class="container">
        <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2"
           href="/user/dashboard">
            <img src="{{ asset('images/cat.png') }}" height="28">
            ShiroNeko
        </a>
        <a href="/logout" class="btn btn-outline-info btn-sm">Logout</a>
    </div>
</nav>

<div class="container py-5">

    <!-- HEADER -->
    <div class="text-center mb-4">
        <h3 class="fw-bold text-info">RIWAYAT TRANSAKSI</h3>
        <p class="text-secondary">Pantau status top up game kamu</p>
    </div>

    <div class="card card-neon p-4">

        <table class="table align-middle">
            <thead>
            <tr>
                <th>#</th>
                <th>Game</th>
                <th>Produk</th>
                <th>ID Game</th>
                <th>Payment</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th class="text-center">Aksi</th>
            </tr>
            </thead>

            <tbody>
            @forelse ($transactions as $trx)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td class="fw-semibold text-info">
                        {{ $trx->product->game->name ?? '-' }}
                    </td>

                    <td>{{ $trx->product->name ?? '-' }}</td>

                    <td class="text-warning fw-semibold">
                        {{ $trx->game_account }}
                    </td>

                    <td>
                        <span class="badge bg-info text-dark">
                            {{ strtoupper($trx->payment_method) }}
                        </span>
                    </td>

                    <td>
                        Rp {{ number_format($trx->product->price ?? 0,0,',','.') }}
                    </td>

                    <td>
                        @if ($trx->status === 'pending')
                            <span class="badge-status status-pending">
                                <i class="bi bi-hourglass-split"></i> Pending
                            </span>
                        @elseif ($trx->status === 'success')
                            <span class="badge-status status-success">
                                <i class="bi bi-check-circle"></i> Success
                            </span>
                        @else
                            <span class="badge-status status-failed">
                                <i class="bi bi-x-circle"></i> Failed
                            </span>
                        @endif
                    </td>

                    <td class="text-secondary">
                        {{ $trx->created_at->format('d M Y H:i') }}
                    </td>

                    <td class="text-center">
                        @if ($trx->status === 'pending')
                            <form action="/user/riwayat/{{ $trx->id }}/cancel"
                                  method="POST"
                                  onsubmit="return confirm('Batalkan transaksi ini?')">
                                @csrf
                                <button class="btn btn-sm btn-cancel">
                                    <i class="bi bi-x-lg"></i> Batalkan
                                </button>
                            </form>
                        @else
                            —
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center text-secondary py-5">
                        <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                        Belum ada transaksi
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>

    </div>

    <div class="text-center mt-4">
        <a href="/user/dashboard" class="btn btn-outline-info">
            <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
        </a>
    </div>

</div>

</body>
</html>