<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard User | ShiroNeko</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: #0f0f1a;
    color: #fff;
    font-family: 'Segoe UI', sans-serif;
}

/* NAVBAR */
.navbar {
    backdrop-filter: blur(10px);
}

/* SIDEBAR */
.sidebar {
    width: 90px;
    background: linear-gradient(180deg, #0b0b14, #14142b);
    min-height: 100vh;
    position: fixed;
}

.sidebar a {
    color: #aaa;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 18px 0;
    font-size: 12px;
}

.sidebar a.active,
.sidebar a:hover {
    color: #00ffd5;
    background: rgba(0,255,213,0.1);
}

/* MAIN */
.main {
    margin-left: 90px;
    padding: 25px 35px;
}

/* GREETING */
.greeting {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.greeting h4 span {
    color: #00ffd5;
}

/* BANNER */
.banner {
    background: linear-gradient(135deg, #302b63, #24243e);
    border-radius: 22px;
    padding: 35px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 25px rgba(0,255,213,.2);
}

/* CATEGORY */
.category button {
    background: #1b1b2e;
    border: none;
    color: #ccc;
    border-radius: 20px;
    padding: 6px 16px;
    margin-right: 6px;
    font-size: 13px;
}

.category button.active {
    background: #00ffd5;
    color: #000;
}

/* GAME CARD */
.game-card {
    background: #14142b;
    border-radius: 18px;
    padding: 14px;
    text-align: center;
    transition: .3s;
    box-shadow: 0 0 15px rgba(0,0,0,.3);
}

.game-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 0 30px rgba(0,255,213,.35);
}

.game-card img {
    border-radius: 14px;
    width: 100%;
    height: 140px;
    object-fit: cover;
}

/* FOOTER */
.footer {
    background: linear-gradient(180deg, #0b0b14, #14142b);
    padding: 40px 0 25px;
    box-shadow: 0 -5px 20px rgba(0,255,213,.15);
}

.footer-link {
    color: #aaa;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 6px;
    transition: .3s;
}

.footer-link:hover {
    color: #00ffd5;
    transform: translateX(4px);
}

.footer-divider {
    border-color: rgba(255,255,255,.08);
    margin: 20px 0;
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

<!-- SIDEBAR -->
<div class="sidebar">
    <a href="/user/dashboard" class="active">
        <i class="bi bi-house fs-4"></i>
        Home
    </a>
    <a href="/user/riwayat">
        <i class="bi bi-receipt fs-4"></i>
        Transaksi
    </a>
</div>

<!-- MAIN -->
<div class="main">

<!-- GREETING -->
<div class="greeting">
    <h4 class="fw-bold">
        Selamat Datang, <span>{{ session('name') }}</span>
    </h4>
    <span class="text-secondary small">Top up cepat & aman</span>
</div>

<!-- CAROUSEL -->
<div id="promoCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
<div class="carousel-inner">

<div class="carousel-item active">
    <div class="banner">
        <div>
            <h4 class="fw-bold">Top Up Sekarang</h4>
            <p class="text-secondary">Bonus lebih banyak menanti!</p>
            <a href="/user/games" class="btn btn-info fw-bold">
                Top Up Sekarang
            </a>
        </div>
        <img src="{{ asset('images/banner1.png') }}" height="160">
    </div>
</div>

<div class="carousel-item">
    <div class="banner">
        <div>
            <h4 class="fw-bold">Promo Spesial</h4>
            <p class="text-secondary">Cashback hingga 20%</p>
            <a href="#" class="btn btn-info fw-bold">Lihat Promo</a>
        </div>
        <img src="{{ asset('images/banner2.png') }}" height="160">
    </div>
</div>

</div>
</div>

<!-- CATEGORY -->
<div class="category mb-4">
    <button class="active">🔥 Populer</button>
    <button>Top Up</button>
</div>

<!-- GAME LIST -->
<h5 class="mb-3 text-info fw-bold">🔥 Game Populer</h5>

<div class="row g-4">
@forelse ($games as $game)
<div class="col-md-2 col-sm-4">
    <div class="game-card">

        @if($game->image)
            <img src="{{ asset('images/games/'.$game->image) }}">
        @else
            <div class="bg-secondary text-center py-5">No Image</div>
        @endif

        <h6 class="mt-2 text-info">{{ $game->name }}</h6>

        <a href="{{ route('user.games.show',$game->id) }}"
           class="btn btn-sm btn-outline-info w-100 mt-2">
            Top Up
        </a>
    </div>
</div>
@empty
<div class="col-12 text-center text-secondary">
    Game belum tersedia
</div>
@endforelse
</div>

<!-- FOOTER -->
<footer class="footer mt-5">
    <div class="container">
        <div class="row text-center text-md-start">

            <!-- BRAND -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-info d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                    <img src="{{ asset('images/cat.png') }}" height="26">
                    ShiroNeko
                </h5>
                <p class="text-secondary small mt-2">
                    Platform top up game cepat, aman, dan terpercaya.
                </p>
            </div>

            <!-- MENU -->
            <div class="col-md-4 mb-4">
                <h6 class="text-info fw-bold">Menu</h6>
                <ul class="list-unstyled small">
                    <li><a href="/user/dashboard" class="footer-link">Dashboard</a></li>
                    <li><a href="/user/games" class="footer-link">Top Up Game</a></li>
                    <li><a href="/user/riwayat" class="footer-link">Riwayat Transaksi</a></li>
                </ul>
            </div>

            <!-- INFO -->
            <div class="col-md-4 mb-4">
                <h6 class="text-info fw-bold">Informasi</h6>
                <ul class="list-unstyled small">
                    <li><a href="/cara-topup" class="footer-link">Cara Top Up</a></li>
                    <li><a href="/faq" class="footer-link">FAQ</a></li>
                    <li><a href="/privacy-policy" class="footer-link">Privacy Policy</a></li>
                </ul>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="text-center small text-secondary">
            © {{ date('Y') }} <span class="text-info fw-bold">ShiroNeko</span>. All rights reserved.
        </div>
    </div>
</footer>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
