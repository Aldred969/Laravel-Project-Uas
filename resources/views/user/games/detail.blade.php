<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $game->name }} | Top Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container py-5">

    <h3 class="text-info fw-bold mb-4">
        Top Up {{ $game->name }}
    </h3>

    <div class="row">
        <!-- LIST PRODUK -->
        <div class="col-md-6">

            <form action="{{ route('user.checkout') }}" method="POST">
                @csrf

                <input type="hidden" name="game_id" value="{{ $game->id }}">

                <div class="mb-3">
                    <label class="form-label">User ID Game</label>
                    <input type="text"
                           name="game_account"
                           class="form-control"
                           placeholder="Masukkan ID Game"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pilih Nominal</label>

                    @foreach($products as $product)
                        <div class="form-check mb-2">
                            <input class="form-check-input"
                                   type="radio"
                                   name="product_id"
                                   value="{{ $product->id }}"
                                   required>
                            <label class="form-check-label">
                                {{ $product->name }} —
                                <strong>Rp {{ number_format($product->price,0,',','.') }}</strong>
                            </label>
                        </div>
                    @endforeach
                </div>

                <button class="btn btn-info w-100 fw-bold">
                    Checkout
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>
