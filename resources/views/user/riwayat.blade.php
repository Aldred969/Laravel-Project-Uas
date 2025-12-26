<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Transaksi | ShiroNeko</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
            body {
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        color: #fff;
        min-height: 100vh;
    }

    .card-neon {
        background: #0b0b14;
        border-radius: 16px;
        box-shadow: 0 0 25px rgba(0,255,255,.25);
    }

        /* HEADER TABEL */
    .table thead th {
        background-color: #020617 !important;
        color: #38bdf8 !important; /* BIRU NEON */
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        padding: 14px;
        border: none !important;
    }

    /* JARAK GARIS BAWAH HEADER */
    .table thead tr {
        border-bottom: 1px solid rgba(0,255,255,.25);

    /* ==== TABLE FIX ==== */
    .table {
        background: #111827;
        border-radius: 12px;
        overflow: hidden;
    }

    .table thead {
        background: #020617;
    }

    .table th {
        color: #38bdf8;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        padding: 14px;
    }

    .table td {
        color: #e5e7eb;
        padding: 14px;
        background: #111827;
    }

    .table tbody tr {
        transition: all .25s ease;
    }

    .table tbody tr:hover {
        background: rgba(0,255,255,.08);
    }

    .table tbody tr:not(:last-child) td {
        border-bottom: 1px solid rgba(255,255,255,.08);
    }

    .badge {
        font-size: .8rem;
        padding: .45em .8em;
    }

    .btn-neon {
        background: linear-gradient(45deg, #00ffd5, #00b3ff);
        border: none;
        color: #000;
        font-weight: bold;
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

    <!-- JUDUL -->
    <div class="text-center mb-4">
        <h3 class="fw-bold text-info">Riwayat Transaksi Saya</h3>
        <p class="text-light">Pantau status top up game kamu</p>
    </div>

    <div class="card card-neon p-4">

        <table class="table table-hover mb-0">
            <thead>
                <tr class="text-info">
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
                        @if ($trx->status === 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif ($trx->status === 'success')
                            <span class="badge bg-success">Success</span>
                        @elseif ($trx->status === 'failed')
                            <span class="badge bg-danger">Failed</span>
                        @endif
                    </td>

                    <td>{{ $trx->created_at->format('d M Y H:i') }}</td>

                    <td>
                        @if ($trx->status === 'pending')
                            <form action="/user/riwayat/{{ $trx->id }}/cancel"
                                  method="POST"
                                  onsubmit="return confirm('Batalkan transaksi ini?')">
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
                    <td colspan="7" class="text-center text-secondary py-4">
                        Belum ada transaksi
                    </td>
                </tr>
            @endforelse
            </tbody>

        </table>
    </div>

    <a href="/user/dashboard" class="btn btn-outline-info mt-4">
        <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
    </a>

</div>

</body>
</html>
