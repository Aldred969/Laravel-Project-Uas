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

        .game-header,
        .product-card {
            background: #111;
            border-radius: 18px;
            box-shadow: 0 0 18px rgba(0,255,255,.2);
        }

        .product-card {
            transition: .3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 0 30px rgba(0,255,255,.35);
        }

        .product-card.active {
            border: 2px solid #00ffd5;
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
<div class="row g-4">

    <!-- ================= LEFT ================= -->
    <div class="col-lg-8">

        <!-- GAME HEADER -->
        <div class="game-header mb-4">
            <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('images/games/'.$game->image) }}" class="w-100 rounded-start">
                </div>
                <div class="col-md-8 p-4">
                    <h3 class="fw-bold text-info">{{ $game->name }}</h3>
                    <p class="text-light">
                        {{ $game->description ?? 'Top up game resmi, cepat, dan aman.' }}
                    </p>
                </div>
            </div>
        </div>

        <!-- STEP 1 -->
        <div class="product-card p-4 mb-4">
            <h5 class="fw-bold text-info mb-3">
                1️⃣ Masukkan ID Pengguna
            </h5>

            <input type="text"
                   class="form-control mb-2"
                   placeholder="ID Pengguna">

            <small class="text-secondary">
                Untuk menemukan ID, buka pengaturan akun di dalam game.
            </small>
        </div>

        <!-- STEP 2 -->
        <div class="product-card p-4">
            <h5 class="fw-bold text-info mb-4">
                2️⃣ Pilih Jumlah
            </h5>

            <div class="row g-3">
                @foreach ($game->products as $product)
                    <div class="col-md-4 col-sm-6">
                        <div class="product-card p-3 h-100 text-center selectable-product"
                             data-name="{{ $product->name }}"
                             data-price="{{ $product->price }}">

                            <h6 class="fw-bold text-info mb-1">
                                {{ $product->name }}
                            </h6>
                            <p class="mb-0">
                                Rp {{ number_format($product->price,0,',','.') }}
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <!-- ================= RIGHT ================= -->
    <div class="col-lg-4">
         <form action="{{ route('user.checkout') }}" method="POST">
    @csrf

    <!-- hidden data dari JS -->
    <input type="hidden" name="game_id" id="input-game-id">
    <input type="hidden" name="product_id" id="input-product-id">
    <input type="hidden" name="nominal" id="input-nominal">
    <input type="hidden" name="price" id="input-price">

    <div class="product-card p-4 sticky-top" style="top:90px">
        <h5 class="fw-bold text-info mb-4">Checkout</h5>

        <div class="mb-3">
            <p class="mb-1 text-secondary">Item</p>
            <div class="border rounded p-2 text-info fw-bold" id="checkout-item">
                -
            </div>
        </div>

        <div class="mb-3">
            <p class="mb-1 text-secondary">Payment</p>
            <div class="border rounded p-2 text-secondary">
                Manual Transfer
            </div>
        </div>

        <div class="mb-3">
            <input type="email"
                   class="form-control"
                   name="email"
                   placeholder="Alamat Email (Opsional)">
            <small class="text-warning">
                Harap mengisi alamat email apabila ingin bukti pembayaran
            </small>
        </div>

        <hr>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <span>Total</span>
            <h5 class="fw-bold text-info mb-0" id="checkout-total">
                Rp 0
            </h5>
        </div>

        <!-- TOMBOL FINALISASI -->
        <button type="submit" class="btn btn-game w-100" disabled id="btn-buy">
            Beli Sekarang
        </button>

        <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label text-secondary">
                Simpan informasi game & denominasi
            </label>
        </div>
</form>
</div>

<!-- ================= SCRIPT ================= -->
<script>
    const products = document.querySelectorAll('.selectable-product');
    const checkoutItem = document.getElementById('checkout-item');
    const checkoutTotal = document.getElementById('checkout-total');
    const buyButton = document.getElementById('btn-buy');

    products.forEach(product => {
        product.addEventListener('click', () => {

            products.forEach(p => p.classList.remove('active'));

            product.classList.add('active');

            const name = product.dataset.name;
            const price = parseInt(product.dataset.price);

            checkoutItem.innerText = name;
            checkoutTotal.innerText = 'Rp ' + price.toLocaleString('id-ID');

            buyButton.disabled = false;
        });
    });
</script>

</body>
</html>
