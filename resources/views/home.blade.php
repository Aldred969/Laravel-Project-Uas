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
            min-height: 80vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #302b63, #24243e);
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

<!-- HERO -->
<section class="hero">
    <div class="container text-center">
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
</section>

<!-- GAME LIST -->
<section class="container my-5">
    <h3 class="text-center mb-4">🎮 Game Populer</h3>
    <div class="row g-4">

        <div class="col-md-3">
            <div class="game-card p-3 text-center">
                <i class="bi bi-fire fs-1 text-danger"></i>
                <h5 class="mt-3">Mobile Legends</h5>
                <p class="text-secondary">Top Up Diamond</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="game-card p-3 text-center">
                <i class="bi bi-fire fs-1 text-danger"></i>
                <h5 class="mt-3">Free Fire</h5>
                <p class="text-secondary">Top Up Diamond</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="game-card p-3 text-center">
                <i class="bi bi-fire fs-1 text-danger"></i>
                <h5 class="mt-3">Genshin Impact</h5>
                <p class="text-secondary">Top Up Primogems</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="game-card p-3 text-center">
                <i class="bi bi-fire fs-1 text-danger"></i>
                <h5 class="mt-3">Valorant</h5>
                <p class="text-secondary">Top Up Valorant Points</p>
            </div>
        </div>