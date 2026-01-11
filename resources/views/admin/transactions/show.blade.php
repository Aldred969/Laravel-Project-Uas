<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi | ShiroNeko Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #1a1a2e, #0b0b14);
            color: #e5e7eb;
            min-height: 100vh;
        }

        /* CARD */
        .card-neon {
            background: #020617;
            border-radius: 22px;
            box-shadow: 0 0 45px rgba(56,189,248,.25);
            border: 1px solid rgba(56,189,248,.15);
        }

        /* SECTION TITLE */
        .section-title {
            font-size: .75rem;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: #38bdf8;
            margin-bottom: 14px;
            font-weight: 600;
        }

        /* INFO LIST */
        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 14px 0;
            border-bottom: 1px dashed rgba(255,255,255,.08);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .label {
            color: #94a3b8;
            font-size: .85rem;
        }

        .value {
            font-weight: 600;
            color: #e5e7eb;
        }

        /* STATUS BADGE */
        .badge-status {
            padding: .5em 1em;
            font-size: .8rem;
            border-radius: 30px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .status-pending {
            background: rgba(234,179,8,.15);
            color: #facc15;
        }

        .status-success {
            background: rgba(34,197,94,.15);
            color: #4ade80;
        }

        .status-failed {
            background: rgba(239,68,68,.15);
            color: #f87171;
        }

        /* PAYMENT BADGE */
        .badge-payment {
            padding: .4em .9em;
            font-size: .75rem;
            border-radius: 20px;
            font-weight: 600;
            background: rgba(56,189,248,.15);
            color: #38bdf8;
            border: 1px solid rgba(56,189,248,.25);
        }

        /* BUTTON */
        .btn-neon {
            background: linear-gradient(45deg, #00ffd5, #00b3ff);
            border: none;
            color: #000;
            font-weight: bold;
        }

        .btn-neon:hover {
            filter: brightness(1.1);
        }

        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(56,189,248,.4), transparent);
            margin: 20px 0;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-black shadow">
    <div class="container">
        <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2"
           href="/admin/dashboard">
            <img src="{{ asset('images/cat.png') }}" height="28">
            ShiroNeko Admin
        </a>
        <a href="/logout" class="btn btn-outline-info btn-sm">Logout</a>
    </div>
</nav>

<div class="container py-5">

    <!-- BACK -->
    <a href="{{ route('admin.transactions.index') }}"
       class="btn btn-outline-info btn-sm mb-4">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>

    <div class="card card-neon p-4">

        <div class="row g-4">

            <!-- LEFT : DETAIL -->
            <div class="col-lg-8">
                <div class="section-title">
                    <i class="bi bi-info-circle"></i> Informasi Transaksi
                </div>

                <div class="info-item">
                    <span class="label">ID Transaksi</span>
                    <span class="value">#{{ $transaction->id }}</span>
                </div>

                <div class="info-item">
                    <span class="label">User</span>
                    <span class="value">{{ $transaction->user->name ?? '-' }}</span>
                </div>

                <div class="info-item">
                    <span class="label">Game</span>
                    <span class="value">{{ $transaction->product->game->name ?? '-' }}</span>
                </div>

                <div class="info-item">
                    <span class="label">Produk</span>
                    <span class="value">{{ $transaction->product->name ?? '-' }}</span>
                </div>

                <div class="info-item">
                    <span class="label">Harga</span>
                    <span class="value">
                        Rp {{ number_format($transaction->product->price ?? 0,0,',','.') }}
                    </span>
                </div>

                <!-- 🔥 PAYMENT METHOD -->
                <div class="info-item">
                    <span class="label">Metode Pembayaran</span>
                    <span class="badge-payment">
                        <i class="bi bi-credit-card"></i>
                        {{ strtoupper($transaction->payment_method ?? '-') }}
                    </span>
                </div>

                <div class="info-item">
                    <span class="label">ID Game User</span>
                    <span class="value">{{ $transaction->game_account }}</span>
                </div>

                <div class="info-item">
                    <span class="label">Tanggal</span>
                    <span class="value">
                        {{ $transaction->created_at->format('d M Y H:i') }}
                    </span>
                </div>
            </div>

            <!-- RIGHT : ACTION -->
            <div class="col-lg-4">
                <div class="section-title">
                    <i class="bi bi-gear"></i> Status & Aksi
                </div>

                <div class="mb-3">
                    @if ($transaction->status === 'pending')
                        <span class="badge-status status-pending">
                            <i class="bi bi-hourglass-split"></i> Pending
                        </span>
                    @elseif ($transaction->status === 'success')
                        <span class="badge-status status-success">
                            <i class="bi bi-check-circle"></i> Success
                        </span>
                    @else
                        <span class="badge-status status-failed">
                            <i class="bi bi-x-circle"></i> Failed
                        </span>
                    @endif
                </div>

                <form action="{{ route('admin.transactions.updateStatus', $transaction->id) }}"
                      method="POST" class="mb-3">
                    @csrf
                    <select name="status" class="form-select mb-2">
                        <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="success" {{ $transaction->status == 'success' ? 'selected' : '' }}>Success</option>
                        <option value="failed" {{ $transaction->status == 'failed' ? 'selected' : '' }}>Failed</option>
                    </select>

                    <button class="btn btn-neon w-100">
                        <i class="bi bi-check-circle"></i> Update Status
                    </button>
                </form>

                <div class="divider"></div>

                <form action="{{ route('admin.transactions.destroy', $transaction->id) }}"
                      method="POST"
                      onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger w-100">
                        <i class="bi bi-trash"></i> Hapus Transaksi
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>

</body>
</html>
