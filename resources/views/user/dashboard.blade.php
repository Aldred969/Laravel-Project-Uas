<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard User | Game Top Up</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }
        .card-custom {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">NekoTopUp</a>
        <div class="ms-auto">
            <span class="text-white me-3">
                <i class="bi bi-person-circle"></i> {{ session('name') }}
            </span>
            <a href="/logout" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h3 class="mb-4">Dashboard User</h3>

    <div class="row g-4">
        <!-- Card Game -->
        <div class="col-md-4">
            <div class="card card-custom text-center p-4">
                <i class="bi bi-controller fs-1 text-primary"></i>
                <h5 class="mt-3">Daftar Game</h5>
                <p class="text-muted">Lihat semua game yang tersedia</p>
                <a href="/games" class="btn btn-primary">Lihat Game</a>
            </div>
        </div>

        <!-- Card Top Up -->
        <div class="col-md-4">
            <div class="card card-custom text-center p-4">
                <i class="bi bi-cash-stack fs-1 text-success"></i>
                <h5 class="mt-3">Top Up</h5>
                <p class="text-muted">Lakukan top up game favoritmu</p>
                <a href="/topup" class="btn btn-success">Top Up Sekarang</a>
            </div>
        </div>

        <!-- Card Riwayat -->
        <div class="col-md-4">
            <div class="card card-custom text-center p-4">
                <i class="bi bi-clock-history fs-1 text-warning"></i>
                <h5 class="mt-3">Riwayat Transaksi</h5>
                <p class="text-muted">Lihat transaksi yang pernah dilakukan</p>
                <a href="/riwayat" class="btn btn-warning text-white">Lihat Riwayat</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>