<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kebijakan Privasi | ShiroNeko</title>

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
    color: #fff;
    box-shadow: 0 0 35px rgba(56,189,248,.55);
}

.accordion-body {
    background: rgba(15,23,42,.85);
    border-radius: 0 0 18px 18px;
    line-height: 1.8;
    padding: 22px;
    border-top: 1px solid rgba(56,189,248,.3);
    color: #ffffff; /* teks isi putih */
}

/* Info Highlight */
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

<main class="container my-5" style="max-width: 900px;">
    <div class="hero-card">

        <h2 class="text-center fw-bold text-info mb-3">
            🔐 Kebijakan Privasi
        </h2>

        <p class="text-center text-secondary mb-4">
            Privasi dan keamanan data pengguna merupakan prioritas utama kami
        </p>

        <div class="notice">
            <i class="bi bi-shield-lock me-2"></i>
            Data Anda hanya digunakan untuk keperluan layanan dan tidak diperjualbelikan.
        </div>

        <div class="accordion">

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p1">
                    <i class="bi bi-database-lock me-2"></i>
                    Informasi yang Kami Kumpulkan
                </button>
                <div id="p1" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Kami dapat mengumpulkan data seperti nama, email, ID game, riwayat transaksi,
                        alamat IP, serta informasi teknis lainnya untuk mendukung operasional layanan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p2">
                    <i class="bi bi-gear-wide-connected me-2"></i>
                    Penggunaan Informasi
                </button>
                <div id="p2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Informasi digunakan untuk memproses transaksi, verifikasi pembayaran,
                        meningkatkan kualitas layanan, serta keperluan keamanan sistem.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p3">
                    <i class="bi bi-shield-check me-2"></i>
                    Perlindungan & Keamanan Data
                </button>
                <div id="p3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Kami menerapkan langkah keamanan teknis dan administratif untuk melindungi data
                        pengguna dari akses tidak sah, penyalahgunaan, atau kebocoran data.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p4">
                    <i class="bi bi-people me-2"></i>
                    Pembagian Data kepada Pihak Ketiga
                </button>
                <div id="p4" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Data pengguna tidak dijual atau disewakan.
                        Informasi hanya dibagikan kepada mitra pembayaran atau pihak terkait
                        apabila diperlukan untuk memproses transaksi.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p5">
                    <i class="bi bi-arrow-repeat me-2"></i>
                    Perubahan Kebijakan Privasi
                </button>
                <div id="p5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Kebijakan privasi ini dapat diperbarui sewaktu-waktu.
                        Setiap perubahan akan ditampilkan di halaman ini dan berlaku sejak diperbarui.
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
