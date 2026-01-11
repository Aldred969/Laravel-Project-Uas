<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>FAQ | ShiroNeko</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: radial-gradient(circle at top, #1a144f, #0b0822);
    color: #e5e7eb;
    font-family: 'Segoe UI', sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    padding-top: 100px;
}


/* Hero Card */
.hero-card {
    background: rgba(255,255,255,.05);
    backdrop-filter: blur(18px);
    border-radius: 22px;
    padding: 40px;
    box-shadow: 0 0 40px rgba(13,202,240,.25);
    border: 1px solid rgba(255,255,255,.08);
}

/* Accordion */
.accordion-item {
    background: transparent;
    border: none;
    margin-bottom: 16px;
}

.accordion-button {
    background: linear-gradient(145deg, #0f172a, #020617);
    color: #38bdf8;
    border-radius: 16px;
    padding: 18px 22px;
    font-weight: 600;
    transition: all .35s ease;
}

.accordion-button:hover {
    transform: translateY(-2px) scale(1.01);
    box-shadow: 0 0 25px rgba(56,189,248,.4);
}

.accordion-button:not(.collapsed) {
    background: linear-gradient(145deg, #020617, #0f172a);
    color: #ffffff;
    box-shadow: 0 0 35px rgba(56,189,248,.55);
}

.accordion-button::after {
    filter: invert(1);
}

.accordion-body {
    background: rgba(15,23,42,.85);
    border-radius: 0 0 18px 18px;
    line-height: 1.8;
    padding: 22px;
    border-top: 1px solid rgba(56,189,248,.3);
    color: #ffffff; /* teks isi putih */
}

/* Notice */
.notice {
    background: linear-gradient(135deg, rgba(56,189,248,.18), rgba(139,92,246,.18));
    border-left: 4px solid #38bdf8;
    padding: 16px 20px;
    border-radius: 14px;
    margin-bottom: 30px;
    font-size: 15px;
}

footer {
    margin-top: 60px;
    border-top: 1px solid rgba(255,255,255,.08);
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark fixed-top shadow">
<div class="container">
    <a class="navbar-brand text-info fw-bold d-flex align-items-center gap-2" href="/">
        <img src="images/cat.png" height="32"> ShiroNeko
    </a>
</div>
</nav>

<main class="container my-5 flex-grow-1" style="max-width: 900px;">
    <div class="hero-card">

        <h2 class="text-center fw-bold text-info mb-3">
            ❓ Frequently Asked Questions
        </h2>

        <p class="text-center text-secondary mb-4">
            Pertanyaan yang sering diajukan seputar layanan top up ShiroNeko
        </p>

        <div class="notice">
            <i class="bi bi-info-circle me-2"></i>
            Jika pertanyaan Anda tidak ditemukan di sini, silakan hubungi layanan pelanggan kami.
        </div>

        <div class="accordion">

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">
                    <i class="bi bi-shield-check me-2"></i>
                    Apakah top up di ShiroNeko aman?
                </button>
                <div id="faq1" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Ya. Seluruh transaksi diproses melalui sistem yang aman dan
                        <strong>data pengguna dilindungi dengan enkripsi</strong>.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                    <i class="bi bi-clock-history me-2"></i>
                    Berapa lama proses top up?
                </button>
                <div id="faq2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Proses top up biasanya hanya membutuhkan beberapa menit
                        setelah pembayaran berhasil diverifikasi oleh sistem.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                    <i class="bi bi-person-check me-2"></i>
                    Apakah wajib login?
                </button>
                <div id="faq3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Ya. Login diperlukan agar riwayat transaksi, status pesanan,
                        dan keamanan akun dapat tercatat dengan baik.
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<footer class="py-4 text-center small text-secondary bg-dark">
    © 2026 ShiroNeko. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
