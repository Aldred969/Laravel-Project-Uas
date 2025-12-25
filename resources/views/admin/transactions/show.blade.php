<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi | ShiroNeko</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #fff;
            min-height: 100vh;
        }

        .card-neon {
            background: #111;
            border-radius: 18px;
            box-shadow: 0 0 30px rgba(0,255,255,.35);
        }

        .card-header {
            background: transparent;
            border-bottom: 1px solid rgba(0,255,255,.3);
            color: #00ffd5;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .detail-box {
            background: #161616;
            border-radius: 12px;
            padding: 1.2rem;
        }

        .detail-row {
            display: flex;
            padding: .6rem 0;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            width: 35%;
            color: #00ffd5;
            font-weight: 600;
        }

        .detail-sep {
            width: 5%;
            text-align: center;
            color: #aaa;
        }

        .detail-value {
            width: 60%;
            color: #fff;
        }

        .badge-status {
            padding: .45em .9em;
            font-size: .85rem;
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
           href="/admin/dashboard">
            <img src="{{ asset('images/cat.png') }}" height="28">
            ShiroNeko Admin
        </a>

        <a href="/logout" class="btn btn-outline-info btn-sm">
            Logout
        </a>
    </div>
</nav>

<div class="container py-5">

    <!-- KEMBALI -->
    <a href="{{ route('admin.transactions.index') }}"
       class="btn btn-outline-info btn-sm mb-4">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>

    <div class="card card-neon">
        <div class="card-header">
            <i class="bi bi-receipt"></i> Detail Transaksi
        </div>

        <div class="card-body">

            <!-- DETAIL -->
            <div class="detail-box mb-4">

                <div class="detail-row">
                    <div class="detail-label">ID Transaksi</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">#{{ $transaction->id }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">User</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">{{ $transaction->user->name ?? '-' }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Game</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">{{ $transaction->product->game->name ?? '-' }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Produk</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">{{ $transaction->product->name ?? '-' }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Harga</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">
                        Rp {{ number_format($transaction->product->price ?? 0, 0, ',', '.') }}
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Akun Game</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">{{ $transaction->game_account }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Status</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">
                        @if ($transaction->status === 'pending')
                            <span class="badge bg-warning badge-status">Pending</span>
                        @elseif ($transaction->status === 'success')
                            <span class="badge bg-success badge-status">Success</span>
                        @else
                            <span class="badge bg-danger badge-status">Failed</span>
                        @endif
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Tanggal</div>
                    <div class="detail-sep">:</div>
                    <div class="detail-value">
                        {{ $transaction->created_at->format('d M Y H:i') }}
                    </div>
                </div>

            </div>

            <!-- UPDATE STATUS -->
            <form action="{{ route('admin.transactions.updateStatus', $transaction->id) }}"
                  method="POST"
                  class="d-flex gap-2 flex-wrap">
                @csrf

                <select name="status" class="form-select w-auto">
                    <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="success" {{ $transaction->status == 'success' ? 'selected' : '' }}>Success</option>
                    <option value="failed" {{ $transaction->status == 'failed' ? 'selected' : '' }}>Failed</option>
                </select>

                <button class="btn btn-neon">
                    <i class="bi bi-check-circle"></i> Update Status
                </button>
            </form>

        </div>
    </div>

</div>

</body>
</html>
