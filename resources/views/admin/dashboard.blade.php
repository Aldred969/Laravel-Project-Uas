<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin | ShiroNeko</title>

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

        .admin-card {
            background: #111;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,255,255,0.2);
            transition: transform .3s ease, box-shadow .3s ease;
            height: 100%;
        }

        .admin-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(0,255,255,0.35);
        }

        .admin-card i {
            font-size: 50px;
            color: #00ffd5;
        }

        .btn-admin {
            background: linear-gradient(45deg, #00ffd5, #00b3ff);
            border: none;
            color: #000;
            font-weight: bold;
        }

        .btn-admin:hover {
            opacity: 0.9;
        }

        .footer {
            background: #000;
            color: #fff;
        }

        .footer-link {
            color: #aaa;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 6px;
            transition: color .3s ease;
        }

        .footer-link:hover {
            color: #0dcaf0;
        }

        .footer-social {
            color: #aaa;
            transition: color .3s ease, transform .3s ease;
        }

        .footer-social:hover {
            color: #0dcaf0;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2" href="#">
            <img src="{{ asset('images/cat.png') }}" height="30">
            ShiroNeko Admin
        </a>

        <div class="ms-auto d-flex align-items-center gap-3">
            <span class="text-white small">
                <i class="bi bi-shield-lock-fill text-info"></i>
                {{ session('name') }}
            </span>
            <a href="/logout" class="btn btn-outline-info btn-sm">Logout</a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    <h3 class="fw-bold mb-4 text-info">
        Dashboard Admin
    </h3>

    <div class="row g-4">

        <!-- Kelola Game -->
        <div class="col-md-4">
            <div class="admin-card p-4 text-center">
                <i class="bi bi-joystick"></i>
                <h5 class="mt-3">Kelola Game</h5>
                <p class="text-secondary small">
                    Tambah, edit, dan hapus data game
                </p>
                <a href="/admin/games" class="btn btn-admin w-100 mt-2">
                    Kelola Game
                </a>
            </div>
        </div>

        <!-- Produk Top Up -->
        <div class="col-md-4">
            <div class="admin-card p-4 text-center">
                <i class="bi bi-box-seam"></i>
                <h5 class="mt-3">Produk Top Up</h5>
                <p class="text-secondary small">
                    Atur nominal dan harga top up
                </p>
                <a href="/admin/products" class="btn btn-admin w-100 mt-2">
                    Kelola Produk
                </a>
            </div>
        </div>

        <!-- Transaksi -->
        <div class="col-md-4">
            <div class="admin-card p-4 text-center">
                <i class="bi bi-receipt"></i>
                <h5 class="mt-3">Transaksi</h5>
                <p class="text-secondary small">
                    Verifikasi transaksi pengguna
                </p>
                <a href="/admin/transactions" class="btn btn-admin w-100 mt-2">
                    Lihat Transaksi
                </a>
            </div>
        </div>

    </div>
</div>

<footer class="footer mt-5 pt-5 pb-3">
    <div class="container">
        <div class="row gy-4">

            <!-- Brand -->
            <div class="col-md-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="{{ asset('images/cat.png') }}" alt="NekoTopUp Logo" height="32">
                    <h5 class="fw-bold text-info mb-0">ShiroNeko</h5>
                </div>
                <p class="text-secondary small">
                    Ini adalah halaman admin,halaman yang sangat penting didalam web ini, jika kamu bisa berada di dalam sini berarti kamu sedang benar benar tersesat.
                </p>
            </div>
            <!-- Bantuan -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3">Bantuan</h6>
                <ul class="list-unstyled small">
                    <li><a href="#" class="footer-link">Cara Top Up</a></li>
                    <li><a href="#" class="footer-link">FAQ</a></li>
                    <li><a href="#" class="footer-link">Kebijakan Privasi</a></li>
                    <li><a href="#" class="footer-link">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                <div class="d-flex gap-3 fs-5">
                    <a href="#" class="footer-social"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-discord"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center small text-secondary">
            © {{ date('Y') }} ShiroNeko. All rights reserved.
        </div>
    </div>
</footer>

</body>
</html>