<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Cara Top Up | ShiroNeko</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: radial-gradient(circle at top, #1a144f, #0b0822);
    color: #e5e7eb;
    font-family: 'Segoe UI', sans-serif;
    padding-top: 100px;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Navbar hide */
.navbar {
    transition: transform .4s ease;
}
.navbar-hide {
    transform: translateY(-100%);
}

/* Hero */
.hero {
    background: rgba(255,255,255,.05);
    backdrop-filter: blur(20px);
    border-radius: 26px;
    padding: 45px;
    box-shadow: 0 0 45px rgba(13,202,240,.35);
    border: 1px solid rgba(255,255,255,.08);
    text-align: center;
}

/* Progress */
.progress-step {
    display: flex;
    justify-content: space-between;
    margin: 40px 0;
}
.progress-step span {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(255,255,255,.12);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    box-shadow: 0 0 0 rgba(13,202,240,0);
    transition: all .35s ease;
}
.progress-step span.active {
    background: #0dcaf0;
    color: #000;
    box-shadow: 0 0 25px rgba(13,202,240,.6);
}

/* Step Card */
.step-card {
    background: rgba(15,23,42,.85);
    border-radius: 22px;
    padding: 28px;
    height: 100%;
    border: 1px solid rgba(13,202,240,.2);
    transition: all .4s ease;
    position: relative;
    overflow: hidden;
}
.step-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top, rgba(13,202,240,.15), transparent);
    opacity: 0;
    transition: .4s;
}
.step-card:hover::before {
    opacity: 1;
}
.step-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 0 35px rgba(13,202,240,.45);
}

/* Icon */
.step-icon {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: rgba(13,202,240,.2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0dcaf0;
    font-size: 24px;
    margin-bottom: 14px;
    box-shadow: 0 0 18px rgba(13,202,240,.35);
}

/* CTA */
.btn-main {
    padding: 14px 46px;
    font-size: 18px;
    font-weight: bold;
    box-shadow: 0 0 30px rgba(13,202,240,.6);
}

/* Footer */
footer {
    margin-top: auto;
    background: #000;
    border-top: 1px solid rgba(255,255,255,.08);
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-dark bg-dark fixed-top shadow">
<div class="container">
    <a class="navbar-brand text-info fw-bold d-flex align-items-center gap-2" href="/">
        <img src="images/cat.png" height="32"> ShiroNeko
    </a>

    <div class="ms-auto">
        <a href="/login" class="btn btn-outline-info btn-sm me-2">Login</a>
        <a href="/register" class="btn btn-info btn-sm text-dark">Register</a>
    </div>
</div>
</nav>

<main class="container my-5" style="max-width: 1000px;">

    <div class="hero mb-5">
        <h2 class="fw-bold text-info mb-2">
            🚀 Cara Top Up di ShiroNeko
        </h2>
        <p class="text-secondary">
            Top up game favoritmu hanya dalam beberapa langkah mudah
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-person-plus"></i></div>
                <h5 class="fw-bold text-info">1. Daftar / Login</h5>
                <p class="small mt-2 text-white">
                    Buat akun ShiroNeko atau login untuk mengakses seluruh fitur top up.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-grid"></i></div>
                <h5 class="fw-bold text-info">2. Masuk Dashboard</h5>
                <p class="small mt-2 text-white">
                    Akses daftar game, saldo, dan riwayat transaksi dari dashboard.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-controller"></i></div>
                <h5 class="fw-bold text-info">3. Pilih Game</h5>
                <p class="small mt-2 text-white">
                    Pilih game favorit dan masukkan ID akun game dengan benar.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-bag-check"></i></div>
                <h5 class="fw-bold text-info">4. Pilih Produk</h5>
                <p class="small mt-2 text-white">
                    Tentukan nominal diamond atau item sesuai kebutuhan kamu.
                </p>
            </div>
        </div>

        <div class="col-12">
            <div class="step-card">
                <div class="step-icon"><i class="bi bi-credit-card"></i></div>
                <h5 class="fw-bold text-info">5. Pembayaran</h5>
                <p class="small mt-2 text-white">
                    Selesaikan pembayaran dan item akan otomatis masuk ke akun game kamu.
                </p>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <a href="/login" class="btn btn-info btn-main text-dark">
            Mulai Top Up Sekarang
        </a>
    </div>

</main>

<footer class="py-4 text-center small text-secondary">
    © 2026 ShiroNeko. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
let lastScrollTop = 0;
const navbar = document.getElementById('mainNavbar');

window.addEventListener('scroll', () => {
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
