<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cara Top Up | ShiroNeko</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #14104a, #0f0c29);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            padding-top: 90px;

            /* footer selalu di bawah */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            transition: transform 0.4s ease, background-color 0.3s ease;
        }
        .navbar-hide {
            transform: translateY(-100%);
        }

        /* Content */
        main {
            flex: 1;
        }

        .page-title {
            letter-spacing: 1px;
        }

        /* Step Card */
        .step-card {
            background: linear-gradient(145deg, #111, #0c0c0c);
            border-radius: 18px;
            padding: 24px;
            height: 100%;
            border: 1px solid rgba(13,202,240,.15);
            box-shadow: 0 0 0 rgba(13,202,240,0);
            transition: all .35s ease;
        }

        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0 25px rgba(13,202,240,.35);
        }

        .step-icon {
            width: 48px;
            height: 48px;
            background: rgba(13,202,240,.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            color: #0dcaf0;
            font-size: 22px;
        }

        /* Button */
        .btn-main {
            box-shadow: 0 0 20px rgba(13,202,240,.4);
        }

        /* Footer */
        footer {
            background: #000;
            border-top: 1px solid rgba(255,255,255,.05);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2" href="/">
            <img src="images/cat.png" height="32"> ShiroNeko
        </a>

        <div class="ms-auto">
            <a href="/login" class="btn btn-outline-info btn-sm me-2">Login</a>
            <a href="/register" class="btn btn-info btn-sm text-dark">Register</a>
        </div>
    </div>
</nav>

<!-- MAIN CONTENT -->
<main>
<section class="container my-5">
    <h2 class="text-center fw-bold mb-3 text-info page-title">
        Cara Top Up di ShiroNeko
    </h2>
    <p class="text-center text-secondary mb-5">
        Ikuti langkah mudah berikut untuk melakukan top up game favoritmu
    </p>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-person-plus"></i></div>
                <h5 class="fw-bold text-info">1. Daftar / Login</h5>
                <p class="small mt-2">
                    Buat akun ShiroNeko atau login jika sudah memiliki akun.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-grid"></i></div>
                <h5 class="fw-bold text-info">2. Masuk Dashboard</h5>
                <p class="small mt-2">
                    Akses menu Daftar Game dan Riwayat Transaksi dari dashboard.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-controller"></i></div>
                <h5 class="fw-bold text-info">3. Pilih Game</h5>
                <p class="small mt-2">
                    Tentukan game yang ingin kamu top up.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-bag-check"></i></div>
                <h5 class="fw-bold text-info">4. Pilih Produk</h5>
                <p class="small mt-2">
                    Pilih nominal diamond atau item sesuai kebutuhan.
                </p>
            </div>
        </div>

        <div class="col-12">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-credit-card"></i></div>
                <h5 class="fw-bold text-info">5. Pembayaran</h5>
                <p class="small mt-2">
                    Selesaikan pembayaran dan produk akan masuk otomatis ke akun game kamu.
                </p>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <a href="/login" class="btn btn-info btn-lg fw-bold text-dark btn-main px-5">
            Mulai Top Up Sekarang
        </a>
    </div>
</section>
</main>

<!-- FOOTER -->
<footer class="py-4 text-center small text-secondary">
    © 2025 ShiroNeko — Game Top Up Marketplace
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS NAVBAR HIDE -->
<script>
let lastScrollTop = 0;
const navbar = document.getElementById('mainNavbar');

window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > 100) {
        navbar.classList.add('navbar-hide');
    } else {
        navbar.classList.remove('navbar-hide');
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
</script>

</body>
</html>
