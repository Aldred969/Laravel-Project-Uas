<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>{{ $game->name }} | ShiroNeko</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg,#0f0c29,#302b63,#24243e);
    color:#fff;
}

.card-box {
    background:#0b0b14;
    border-radius:16px;
    box-shadow:0 0 20px rgba(0,255,255,.2);
}

.select-card {
    cursor:pointer;
    transition:.3s;
}
.select-card:hover {
    transform:translateY(-4px);
    box-shadow:0 0 25px rgba(0,255,255,.35);
}
.select-card.active {
    border:2px solid #00ffd5;
}

.btn-game {
    background:linear-gradient(45deg,#00ffd5,#00b3ff);
    border:none;
    color:#000;
    font-weight:bold;
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
        <div class="d-flex gap-2">
            <a href="/user/dashboard"
               class="btn btn-outline-info btn-sm">
                <i class="bi bi-arrow-left"></i> Dashboard
            </a>
    <a href="/logout" class="btn btn-outline-info btn-sm">Logout</a>
</div>
</nav>

<div class="container py-5">
<div class="row g-4">

<!-- LEFT -->
<div class="col-lg-8">

<!-- GAME INFO -->
<div class="card-box p-4 mb-4">
<div class="row align-items-center">
    <div class="col-md-4">
        <img src="{{ asset('images/games/'.$game->image) }}" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
        <h3 class="fw-bold text-info">{{ $game->name }}</h3>
        <p>{{ $game->description ?? 'Top up resmi & aman' }}</p>
    </div>
</div>
</div>

<!-- STEP 1 Bar Id -->
<div class="card-box p-4 mb-4">
<h5 class="text-info fw-bold mb-3">1️⃣ ID Pengguna</h5>
<input type="text" id="game_account" class="form-control"
       placeholder="Masukkan ID Game" required>
</div>

<!-- STEP 2 Bar Nominal Produk -->
<div class="card-box p-4 mb-4">
<h5 class="text-info fw-bold mb-3">2️⃣ Pilih Nominal</h5>
<div class="row g-3">
@foreach($game->products as $product)
<div class="col-md-4">
<div class="card-box p-3 text-center select-card product-card"
     data-id="{{ $product->id }}"
     data-name="{{ $product->name }}"
     data-price="{{ $product->price }}">
    <h6 class="text-info fw-bold">{{ $product->name }}</h6>
    <p>Rp {{ number_format($product->price,0,',','.') }}</p>
            </div>
        </div>
@endforeach
    </div>
</div>

<!-- STEP 3 Bar Pembayaran -->
<div class="card-box p-4">
<h5 class="text-info fw-bold mb-3">3️⃣ Metode Pembayaran</h5>
<div class="row g-3">
@foreach(['GoPay','DANA','OVO'] as $pay)
<div class="col-md-3">
<div class="card-box p-3 text-center select-card payment-card"
     data-method="{{ $pay }}">
    {{ $pay }}
</div>
</div>
@endforeach
</div>
</div>

</div>

<!-- RIGHT / CHECKOUT -->
<div class="col-lg-4">
<form action="{{ route('user.checkout') }}" method="POST">
@csrf

<input type="hidden" name="product_id" id="input-product">
<input type="hidden" name="payment_method" id="input-payment">
<input type="hidden" name="game_account" id="input-account">

<div class="card-box p-4 sticky-top" style="top:90px">
<h5 class="text-info fw-bold mb-4">Checkout</h5>

<p class="text-secondary mb-1">Item</p>
<div class="border rounded p-2 mb-3" id="checkout-item">-</div>

<p class="text-secondary mb-1">Payment</p>
<div class="border rounded p-2 mb-3" id="checkout-payment">-</div>
    <hr>
    <div class="d-flex justify-content-between mb-3">
    <span>Total</span>
    <h5 class="fw-bold text-info" id="checkout-total">Rp 0</h5>
</div>
    <button class="btn btn-game w-100" disabled id="btn-buy">
    Beli Sekarang
    </button>
</div>
</form>
</div>

</div>
</div>

<script>
let selectedProduct=null;
let selectedPayment=null;

const updateCheckout=()=>{
document.getElementById('btn-buy').disabled =
!(selectedProduct && selectedPayment &&
document.getElementById('game_account').value);

document.getElementById('input-account').value =
document.getElementById('game_account').value;
};

document.querySelectorAll('.product-card').forEach(el=>{
el.onclick=()=>{
document.querySelectorAll('.product-card').forEach(p=>p.classList.remove('active'));
el.classList.add('active');
selectedProduct=el;
document.getElementById('checkout-item').innerText=el.dataset.name;
document.getElementById('checkout-total').innerText=
'Rp '+Number(el.dataset.price).toLocaleString('id-ID');
document.getElementById('input-product').value=el.dataset.id;
updateCheckout();
};
});

document.querySelectorAll('.payment-card').forEach(el=>{
el.onclick=()=>{
document.querySelectorAll('.payment-card').forEach(p=>p.classList.remove('active'));
el.classList.add('active');
selectedPayment=el;
document.getElementById('checkout-payment').innerText=el.dataset.method;
document.getElementById('input-payment').value=el.dataset.method;
updateCheckout();
};
});

document.getElementById('game_account').addEventListener('input',updateCheckout);
</script>

</body>
</html>
