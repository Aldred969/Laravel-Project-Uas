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
            background: #0f0f1a;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            width: 90px;
            background: #0b0b14;
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
            font-size: 13px;
        }

        .sidebar a.active,
        .sidebar a:hover {
            color: #00ffd5;
            background: rgba(0,255,213,0.08);
        }

        /* CONTENT */
        .main {
            margin-left: 90px;
            padding: 20px 30px;
        }

        /* NAVBAR */
        .topbar {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .search-box input {
            background: #1b1b2e;
            border: none;
            color: white;
        }

        .search-box input::placeholder {
            color: #888;
        }

        /* BANNER */
        .banner {
            background: linear-gradient(135deg, #302b63, #24243e);
            border-radius: 18px;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        /* CATEGORY */
        .category button {
            background: #1b1b2e;
            border: none;
            color: #ccc;
            border-radius: 20px;
            padding: 6px 15px;
            margin-right: 8px;
            font-size: 13px;
        }

        .category button.active {
            background: #00ffd5;
            color: #000;
        }

        /* GAME CARD */
        .game-card {
            background: #14142b;
            border-radius: 16px;
            padding: 15px;
            text-align: center;
            transition: .3s;
        }

        .game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(0,255,213,0.25);
        }

        .game-card img {
            border-radius: 12px;
            width: 100%;
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

<div id="promoCarousel" class="carousel slide mb-4" data-bs-ride="carousel">

    <!-- INDICATOR -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- CONTENT -->
    <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <div class="carousel-item active">
            <div class="banner">
                <div>
                    <h4 class="fw-bold">Top Up Sekarang</h4>
                    <p class="text-secondary mb-2">
                        Pasti dapat full lebih banyak!
                    </p>
                    <a href="/user/games" class="btn btn-info fw-bold">
                        Top Up Sekarang
                    </a>
                </div>
                <img src="{{ asset('images/banner1.png') }}" height="160">
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item">
            <div class="banner">
                <div>
                    <h4 class="fw-bold">Promo Spesial</h4>
                    <p class="text-secondary mb-2">
                        Cashback hingga 20%
                    </p>
                    <a href="#" class="btn btn-info fw-bold">
                        Lihat Promo
                    </a>
                </div>
                <img src="{{ asset('images/banner2.png') }}" height="160">
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item">
            <div class="banner">
                <div>
                    <h4 class="fw-bold">Game Terbaru</h4>
                    <p class="text-secondary mb-2">
                        Top up game favoritmu sekarang
                    </p>
                    <a href="/user/games" class="btn btn-info fw-bold">
                        Mulai
                    </a>
                </div>
                <img src="{{ asset('images/banner3.png') }}" height="160">
            </div>
        </div>

    </div>

</div>


    <!-- BANNER --
    <div class="banner">
        <div>
            <h4 class="fw-bold">Top Up Sekarang</h4>
            <p class="text-secondary mb-2">Pasti dapat full lebih banyak!</p>
            <button class="btn btn-info fw-bold">Top Up Sekarang</button>
        </div>
        <img src="{{ asset('images/banner.png') }}" height="160">
    </div> -->

    <!-- CATEGORY -->
    <div class="category mb-4">
        <button class="active">🔥 Lagi Populer</button>
        <button>Top Up Langsung</button>
        <button>Baru Rilis</button>
        <button>Voucher</button>
        <button>Pulsa</button>
    </div>

 <!-- GAME LIST -->
<h5 class="mb-3 text-info">🔥 Lagi Populer</h5>

<div class="row g-4">
    @forelse ($games as $game)
        <div class="col-md-2 col-sm-4">
            <div class="game-card text-center">

               <!-- GAMBAR -->
                    @if ($game->image)
                        <img src="{{ asset('images/games/'.$game->image) }}" class="w-100">
                    @else
                        <div class="bg-secondary text-center py-5">
                            No Image
                        </div>
                    @endif

                <h6 class="mt-2 text-info">
                    {{ $game->name }}
                </h6>

                <a href="{{ route('user.games.show', $game->id) }}"
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
</div>

</body>
</html>