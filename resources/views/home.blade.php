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
        }

        .hero {
            position: relative;
            min-height: 80vh;
            overflow: hidden;
        }

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
            border-radius: 12px;
            transition: transform .3s;
        }

        .game-card:hover img {
            transform: scale(1.05);
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/ML.jpg" class="d-block w-100" alt="Mobile Legends">
            </div>
            <div class="carousel-item">
                <img src="/images/FF.jpg" class="d-block w-100" alt="Free Fire">
            </div>
            <div class="carousel-item">
                <img src="/images/GI.jpg" class="d-block w-100" alt="Genshin Impact">
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
            <p class="mt-3 text-secondary">
                Mobile Legends, Free Fire, Genshin Impact, dan lainnya
            </p>
            <a href="/login" class="btn btn-info btn-lg mt-3 text-dark fw-bold">
                Top Up Sekarang
            </a>
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
                <img src="/images/ml-card.jpg" class="img-fluid mb-3">
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
                <img src="/images/ff-card.jpg" class="img-fluid mb-3">
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
                <img src="/images/genshin-card.jpg" class="img-fluid mb-3">
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
                <img src="/images/valorant-card.jpg" class="img-fluid mb-3">
                <h5>Valorant</h5>
                <p class="text-secondary small">Top Up VP</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

    </div>
</section>
