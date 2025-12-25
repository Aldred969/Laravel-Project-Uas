<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>FAQ | ShiroNeko</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #14104a, #0f0c29);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            padding-top: 90px;

            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Section */
        .faq-section {
            max-width: 850px;
        }

        .faq-title {
            letter-spacing: 1px;
        }

        /* Accordion Card */
        .accordion-item {
            background: transparent;
            border: none;
            margin-bottom: 14px;
        }

        .accordion-button {
            background: linear-gradient(145deg, #111, #0c0c0c);
            color: #0dcaf0;
            border-radius: 12px;
            font-weight: 600;
            padding: 16px 18px;
            box-shadow: 0 0 0 rgba(13,202,240,0);
            transition: all .3s ease;
        }

        .accordion-button:hover {
            box-shadow: 0 0 18px rgba(13,202,240,.25);
            transform: translateY(-1px);
        }

        .accordion-button:not(.collapsed) {
            background: linear-gradient(145deg, #0f172a, #111);
            color: #fff;
            box-shadow: 0 0 20px rgba(13,202,240,.35);
        }

        .accordion-button::after {
            filter: invert(1);
        }

        .accordion-body {
            background: #111;
            border-radius: 0 0 12px 12px;
            color: #dbeafe;
            line-height: 1.6;
            padding: 18px;
            border-top: 1px solid rgba(13,202,240,.2);
        }

        /* Footer */
        footer {
            border-top: 1px solid rgba(255,255,255,.05);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2" href="/">
            <img src="images/cat.png" height="32"> ShiroNeko
        </a>
    </div>
</nav>


<main class="flex-fill">
<section class="container my-5 faq-section">
    <h2 class="text-center fw-bold mb-4 text-info faq-title">
        ❓ Frequently Asked Questions
    </h2>
    <p class="text-center text-secondary mb-5">
        Pertanyaan yang sering ditanyakan seputar layanan top up ShiroNeko
    </p>

    <div class="accordion">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">
                    <i class="bi bi-shield-check me-2"></i>
                    Apakah top up di ShiroNeko aman?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Ya, seluruh transaksi menggunakan sistem aman dan data pengguna dilindungi dengan enkripsi.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                    <i class="bi bi-clock-history me-2"></i>
                    Berapa lama proses top up?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Proses top up biasanya hanya membutuhkan beberapa menit setelah pembayaran berhasil diverifikasi.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                    <i class="bi bi-person-check me-2"></i>
                    Apakah wajib login?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Ya, login diperlukan agar riwayat transaksi dan status pesanan dapat tercatat dengan baik.
                </div>
            </div>
        </div>

    </div>
</section>
    </main>
<footer class="py-4 bg-dark text-center small text-secondary">
    © 2025 ShiroNeko — Game Top Up Marketplace
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
