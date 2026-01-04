<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Syarat & Ketentuan | ShiroNeko</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: radial-gradient(circle at top, #1a144f, #0b0822);
    color: #e5e7eb;
    font-family: 'Segoe UI', sans-serif;
    padding-top: 100px;
    min-height: 100vh;
}

/* Hero */
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
    color: #fff;
    box-shadow: 0 0 35px rgba(56,189,248,.55);
}

.accordion-body {
    background: rgba(15,23,42,.85);
    border-radius: 0 0 18px 18px;
    line-height: 1.75;
    padding: 22px;
    border-top: 1px solid rgba(56,189,248,.3);
    color: #ffffff; /* 👈 teks artikel jadi putih */
}

/* Highlight box */
.notice {
    background: linear-gradient(135deg, rgba(56,189,248,.15), rgba(139,92,246,.15));
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

<main class="container my-5" style="max-width: 900px;">
    <div class="hero-card">

        <h2 class="text-center fw-bold text-info mb-3">
            📜 Syarat & Ketentuan
        </h2>

        <p class="text-center text-secondary mb-4">
            Dengan menggunakan layanan ShiroNeko, Anda menyetujui seluruh aturan berikut
        </p>

        <div class="notice">
            <i class="bi bi-info-circle me-2"></i>
            Pastikan Anda membaca seluruh ketentuan sebelum melakukan transaksi top up.
        </div>

        <div class="accordion">

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t1">
                    <i class="bi bi-person-check me-2"></i> Ketentuan Umum
                </button>
                <div id="t1" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        ShiroNeko adalah platform marketplace top up game digital.
                        Pengguna wajib mematuhi seluruh aturan yang berlaku selama menggunakan layanan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t2">
                    <i class="bi bi-wallet2 me-2"></i> Transaksi & Pembayaran
                </button>
                <div id="t2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Semua transaksi bersifat final dan tidak dapat dibatalkan.
                        Pastikan data akun game dan nominal top up sudah benar sebelum pembayaran.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t3">
                    <i class="bi bi-clock-history me-2"></i> Proses Layanan
                </button>
                <div id="t3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Top up akan diproses secara otomatis atau manual sesuai sistem.
                        Keterlambatan dapat terjadi akibat gangguan sistem atau pihak ketiga.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t4">
                    <i class="bi bi-shield-exclamation me-2"></i> Batasan Tanggung Jawab
                </button>
                <div id="t4" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        ShiroNeko tidak bertanggung jawab atas kesalahan input data,
                        gangguan server game, maupun kebijakan publisher.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t5">
                    <i class="bi bi-arrow-repeat me-2"></i> Perubahan Ketentuan
                </button>
                <div id="t5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Syarat & Ketentuan dapat diperbarui sewaktu-waktu.
                        Perubahan berlaku sejak ditampilkan di halaman ini.
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<footer class="py-4 text-center small text-secondary bg-dark">
    © 2025 ShiroNeko — Game Top Up Marketplace
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
