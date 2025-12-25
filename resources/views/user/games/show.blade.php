<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $game->name }} | ShiroNeko</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #fff;
            min-height: 100vh;
        }

        .game-header {
            background: #111;
            border-radius: 18px;
            box-shadow: 0 0 25px rgba(0,255,255,.25);
            overflow: hidden;
        }

        .game-header img {
            height: 220px;
            object-fit: cover;
        }

        .product-card {
            background: #111;
            border-radius: 14px;
            box-shadow: 0 0 18px rgba(0,255,255,.2);
            transition: .3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(0,255,255,.35);
        }

        .btn-game {
            background: linear-gradient(45deg, #00ffd5, #00b3ff);
            border: none;
            color: #000;
            font-weight: bold;
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

<div class="container py-5">

    <!-- KEMBALI -->
    <a href="/user/games" class="btn btn-outline-info btn-sm mb-4">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>

    <!-- HEADER GAME -->
    <div class="game-header mb-5">
        <div class="row g-0 align-items-center">
            <div class="col-md-4">
                @if($game->image)
                    <img src="{{ asset('images/games/'.$game->image) }}" class="w-100">
                @else
                    <div class="bg-secondary text-center py-5">
                        No Image
                    </div>
                @endif
            </div>
            <div class="col-md-8 p-4">
                <h3 class="fw-bold text-info">{{ $game->name }}</h3>
                <p class="text-light">
                    {{ $game->description ?? 'Top up game resmi, cepat, dan aman.' }}
                </p>
            </div>
        </div>
    </div>

    <!-- PRODUK -->
    <h4 class="fw-bold text-info mb-4 text-center">
        Pilih Nominal Top Up
    </h4>

    <div class="row g-4">
        @forelse ($game->products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-card p-3 h-100 text-center">

                    <h6 class="fw-bold text-info mb-2">
                        {{ $product->name }}
                    </h6>

                    <p class="mb-3">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>

                    <form action="{{ route('user.topup.checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <input type="text"
                               name="game_account"
                               class="form-control form-control-sm mb-2"
                               placeholder="ID / Username Game"
                               required>

                        <button class="btn btn-game btn-sm w-100">
                            Top Up
                        </button>
                    </form>

                </div>
            </div>
        @empty
            <div class="col-12 text-center text-secondary">
                Belum ada produk tersedia
            </div>
        @endforelse
    </div>

</div>

</body>
</html>
