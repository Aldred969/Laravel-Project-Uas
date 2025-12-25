<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Game | ShiroNeko</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #fff;
            min-height: 100vh;
        }

        .game-card {
            background: #111;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,255,255,0.2);
            transition: all .3s ease;
        }

        .game-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 30px rgba(0,255,255,0.35);
        }

        .game-card img {
            height: 180px;
            object-fit: cover;
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

    <!-- JUDUL -->
    <div class="text-center mb-5">
        <h3 class="fw-bold text-info">Pilih Game</h3>
        <p class="text-light">
            Top up game favoritmu dengan cepat dan aman
        </p>
    </div>

    <div class="row g-4">

        @forelse ($games as $game)
            <div class="col-md-3 col-sm-6">
                <div class="game-card h-100">

                    <!-- GAMBAR -->
                    @if ($game->image)
                        <img src="{{ asset('images/games/'.$game->image) }}" class="w-100">
                    @else
                        <div class="bg-secondary text-center py-5">
                            No Image
                        </div>
                    @endif

                    <!-- BODY -->
                    <div class="p-3 text-center">
                        <h6 class="fw-bold text-info mb-1">
                            {{ $game->name }}
                        </h6>

                        <p class="small text-light mb-3">
                            {{ $game->description ?? 'Top up game resmi dan terpercaya' }}
                        </p>

                        <a href="{{ route('user.games.show', $game->id) }}"
                           class="btn btn-game btn-sm w-100">
                            Pilih Game
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center text-secondary">
                Belum ada game tersedia
            </div>
        @endforelse

    </div>

</div>

</body>
</html>
