<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin | Game Top Up</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #eef2f7;
        }
        .card-custom {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
        <div class="ms-auto">
            <span class="text-white me-3">
                <i class="bi bi-shield-lock"></i> {{ session('name') }}
            </span>
            <a href="/logout" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h3 class="mb-4">Dashboard Admin</h3>

    <div class="row g-4">
        <!-- Kelola Game -->
        <div class="col-md-4">
            <div class="card card-custom p-4 text-center">
                <i class="bi bi-joystick fs-1 text-primary"></i>
                <h5 class="mt-3">Kelola Game</h5>
                <p class="text-muted">Tambah, edit, hapus data game</p>
                <a href="/admin/games" class="btn btn-primary">Kelola</a>
            </div>
        </div>

        <!-- Kelola Produk -->
        <div class="col-md-4">
            <div class="card card-custom p-4 text-center">
                <i class="bi bi-box-seam fs-1 text-success"></i>
                <h5 class="mt-3">Produk Top Up</h5>
                <p class="text-muted">Kelola nominal dan harga top up</p>
                <a href="/admin/products" class="btn btn-success">Kelola</a>
            </div>
        </div>

        <!-- Transaksi -->
        <div class="col-md-4">
            <div class="card card-custom p-4 text-center">
                <i class="bi bi-receipt fs-1 text-warning"></i>
                <h5 class="mt-3">Transaksi</h5>
                <p class="text-muted">Lihat & verifikasi transaksi user</p>
                <a href="/admin/transactions" class="btn btn-warning text-white">Lihat</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>