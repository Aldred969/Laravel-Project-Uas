<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard User | ShiroNeko</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        .navbar {
            background: #000;
            box-shadow: 0 0 15px rgba(0,255,255,0.2);
        }

        .user-card {
            background: #111;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,255,255,0.2);
            transition: transform .3s ease, box-shadow .3s ease;
            height: 100%;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(0,255,255,0.35);
        }

        .user-card i {
            font-size: 50px;
            color: #00ffd5;
        }

        .btn-user {
            background: linear-gradient(45deg, #00ffd5, #00b3ff);
            border: none;
            color: #000;
            font-weight: bold;
        }

        .btn-user:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2"
           href="/user/dashboard">
            <img src="{{ asset('images/cat.png') }}" height="30">
            ShiroNeko
        </a>

        <div class="ms-auto d-flex align-items-center gap-3">
            <span class="text-white small">
                <i class="bi bi-person-circle text-info"></i>
                {{ session('name') }}
            </span>
            <a href="/logout" class="btn btn-outline-info btn-sm">Logout</a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    <h3 class="fw-bold mb-4 text-info">
        Dashboard User
    </h3>

    <div class="row g-4">

        <!-- DAFTAR GAME -->
        <div class="col-md-4">
            <div class="user-card p-4 text-center">
                <i class="bi bi-controller"></i>
                <h5 class="mt-3">Daftar Game</h5>
                <p class="text-secondary small">
                    Pilih game favorit untuk melakukan top up
                </p>
                <a href="/user/games" class="btn btn-user w-100 mt-2">
                    Lihat Game
                </a>
            </div>
        </div>

        <!-- TOP UP -->
        <div class="col-md-4">
            <div class="user-card p-4 text-center">
                <i class="bi bi-cash-stack"></i>
                <h5 class="mt-3">Top Up</h5>
                <p class="text-secondary small">
                    Proses top up cepat dan aman
                </p>
                <a href="#" class="btn btn-user w-100 mt-2">
                    Top Up Sekarang
                </a>
            </div>
        </div>

        <!-- RIWAYAT -->
        <div class="col-md-4">
            <div class="user-card p-4 text-center">
                <i class="bi bi-clock-history"></i>
                <h5 class="mt-3">Riwayat Transaksi</h5>
                <p class="text-secondary small">
                    Lihat status dan riwayat top up kamu
                </p>
                <a href="#" class="btn btn-user w-100 mt-2">
                    Riwayat Transaksi
                </a>
            </div>
        </div>

    </div>
</div>

</body>
</html>
