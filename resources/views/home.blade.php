<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>NekoTopUp | Marketplace Game</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #0f0c29;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            padding-top: 50px;
        }

        /* Penambahan CSS CLASS HERO */
        .hero {
            position: relative;
            min-height: 80vh;
            overflow: hidden;
        }
        
        /*CSS UNTUK COURSEL */
        .hero .carousel-item img {
            height: 80vh;
            object-fit: cover;
            filter: blur(6px) brightness(0.5);
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            z-index: 2;
        }

        .hero-overlay h1,
        .hero-overlay p {
            color: #fff;
        }


        .game-card {
            background: #111;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,255,255,0.2);
            transition: transform .3s;
        }

        .game-card:hover {
            transform: translateY(-5px);
        }

        footer {
            background: #000;
        }

        .game-card img {
            width: 100%;
            aspect-ratio: 3 / 4;   /* 1200 x 1600 */
            object-fit: cover;
            border-radius: 12px;
        }


        .game-card:hover img {
            transform: scale(1.05);
        }

        /* Menambah fitur pada navbar */
        .navbar {
            transition: transform 0.4s ease, background-color 0.3s ease;
        }

        .navbar-hide {
            transform: translateY(-100%);
        }


    </style>
</head>
<body>

<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-info" href="#">
            <i class="bi bi-controller"></i> NekoTopUp
        </a>
        <div class="ms-auto">
            <a href="/login" class="btn btn-outline-info btn-sm me-2">Login</a>
            <a href="/register" class="btn btn-info btn-sm text-dark">Register</a>
        </div>
    </div>
</nav>

<section class="hero">
    <!-- Carousel Background -->
        <div id="heroCarousel"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="5000"
        data-bs-pause="false">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/ml.jpg') }}" class="d-block w-100" alt="Mobile Legends">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/ff.jpg') }}" class="d-block w-100" alt="Free Fire">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/gi.jpg') }}" class="d-block w-100" alt="Genshin Impact">
            </div>
        </div>
    </div>


    <!-- Text Overlay -->
    <div class="hero-overlay container">
        <div>
            <h1 class="fw-bold display-5">
                Top Up Game Favoritmu<br>
                <span class="text-info">Cepat • Aman • Terpercaya</span>
            </h1>
            <p class="mt-3 text-white">
                Mobile Legends, Free Fire, Genshin Impact, dan lainnya
            </p>
            <a href="/login" class="btn btn-info btn-lg mt-3 text-dark fw-bold">
                Top Up Sekarang
            </a>
        </div>
    </div>
</section>

    <!--Artikel Tentang NekoTopUp-->
<section class="container my-5">
    <h3 class="text-center fw-bold mb-4">📚 Kenapa Sih Harus Milih Kami</h3>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card bg-dark text-light h-100">
                <div class="card-body">
                    <h5 class="card-title">Apa Itu Top Up Game?</h5>
                    <p class="card-text small text-white">
                        Top up game adalah proses pembelian item digital seperti diamond,
                        primogems, atau point untuk meningkatkan pengalaman bermain.
                    </p>
                    <!--
                    <a href="#" class="text-info text-decoration-none">
                        Baca Selengkapnya →
                    </a>
                    -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-light h-100">
                <div class="card-body">
                    <h5 class="card-title">Apakah Top Up Aman?</h5>
                    <p class="card-text small text-white">
                        NekoTopUp menggunakan sistem transaksi aman dan
                        tidak menyimpan data sensitif pengguna.
                    </p>
                    <!--
                    <a href="#" class="text-info text-decoration-none">
                        Baca Selengkapnya →
                    </a>
                    -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-light h-100">
                <div class="card-body">
                    <h5 class="card-title">Kenapa Harus NekoTopUp?</h5>
                    <p class="card-text small text-white">
                        Proses cepat, harga terjangkau, dan dukungan game populer
                        membuat NekoTopUp pilihan terbaik gamer.
                    </p>
                    <!--
                    <a href="#" class="text-info text-decoration-none">
                        Baca Selengkapnya →
                    </a>
                    -->
                </div>
            </div>
        </div>

    </div>
</section>


<!-- GAME LIST -->
<section class="container my-5">
    <h3 class="text-center mb-4 fw-bold">🎮 Game Populer</h3>
    <div class="row g-4">

        <!-- Mobile Legends -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="{{ asset('images/mlcc.png') }}" class="img-fluid mb-3">
                <h5>Mobile Legends</h5>
                <p class="text-secondary small">Top Up Diamond ML</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

        <!-- Free Fire -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="{{ asset('images/ff.jpg') }}" class="img-fluid mb-3">
                <h5>Free Fire</h5>
                <p class="text-secondary small">Top Up Diamond FF</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

        <!-- Genshin -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="/images/gi.jpg" class="img-fluid mb-3">
                <h5>Genshin Impact</h5>
                <p class="text-secondary small">Top Up Primogems</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

        <!-- Valorant -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="/images/val.jpg" class="img-fluid mb-3">
                <h5>Valorant</h5>
                <p class="text-secondary small">Top Up VP</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

    </div>
</section>
    <!--JS UNTUK COURSEL-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--JS UNTUK NAVBAR-->
    <script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('mainNavbar');

    window.addEventListener('scroll', function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scroll ke bawah → navbar menghilang
            navbar.classList.add('navbar-hide');
        } else {
            // Scroll ke atas → navbar muncul
            navbar.classList.remove('navbar-hide');
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
</script>
