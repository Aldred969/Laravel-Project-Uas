<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>NekoTopUp | Marketplace Game</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #0f0c29;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            padding-top: 50px;
        }

        /* Penambahan CSS CLASS HERO */
        .hero {
            position: relative;
            min-height: 80vh;
            overflow: hidden;
        }
        
        /*CSS UNTUK COURSEL */
        .hero .carousel-item img {
            height: 80vh;
            object-fit: cover;
            filter: blur(6px) brightness(0.5);
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            z-index: 2;
        }

        .hero-overlay h1,
        .hero-overlay p {
            color: #fff;
        }

        /* Css Untuk article */
        .feature-card {
            position: relative;
            background: linear-gradient(145deg, #0b0b0f, #141420);
            border-radius: 26px;
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow:
                0 0 50px rgba(0,229,255,0.18),
                inset 0 0 30px rgba(124,77,255,0.08);
            overflow: hidden;
        }

        .feature-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at top left, rgba(0,229,255,0.18), transparent 45%),
                radial-gradient(circle at bottom right, rgba(124,77,255,0.18), transparent 45%);
            z-index: 0;
        }

        .feature-card .card-body {
            position: relative;
            z-index: 1;
        }

        .feature-card h4 {
            font-weight: 800;
            background: linear-gradient(90deg, #00e5ff, #7c4dff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .feature-card hr {
            height: 2px;
            width: 80px;
            background: linear-gradient(90deg, #00e5ff, #7c4dff);
            border: none;
            border-radius: 10px;
        }

        .feature-card .icon-box {
            box-shadow: 0 0 20px rgba(0,229,255,0.6);
        }

        .feature-card .btn-info {
            background: linear-gradient(90deg, #00e5ff, #7c4dff);
            border: none;
            font-weight: 700;
            border-radius: 30px;
            color: #000;
            box-shadow: 0 0 30px rgba(0,229,255,0.6);
        }

        .feature-card .btn-info:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 45px rgba(124,77,255,0.8);
        }

        /* PAKSA TEKS ARTIKEL JADI PUTIH */
        .feature-card,
        .feature-card p,
        .feature-card h4,
        .feature-card h5,
        .feature-card h6,
        .feature-card li,
        .feature-card span,
        .feature-card strong {
            color: #ffffff !important;
        }
        .feature-card .text-muted {
            color: #ffffff !important;
            opacity: 0.9;
        }
        .feature-card ul li {
            margin-bottom: 6px;
        }



        /* Css untuk game card */
        .game-card {
            background: #111;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,255,255,0.2);
            transition: transform .3s;
        }

        .game-card:hover {
            transform: translateY(-5px);
        }

        .game-card img {
            width: 100%;
            aspect-ratio: 3 / 4; 
            object-fit: cover;
            border-radius: 12px;
        }


        .game-card:hover img {
            transform: scale(1.05);
        }

        /* Menambah fitur pada navbar */
        .navbar {
            transition: transform 0.4s ease, background-color 0.3s ease;
        }

        .navbar-hide {
            transform: translateY(-100%);
        }

        /* css untuk footer */

        .footer {
            background: #000;
            color: #fff;
        }

        .footer-link {
            color: #aaa;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 6px;
            transition: color .3s ease;
        }

        .footer-link:hover {
            color: #0dcaf0;
        }

        .footer-social {
            color: #aaa;
            transition: color .3s ease, transform .3s ease;
        }

        .footer-social:hover {
            color: #0dcaf0;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-info" href="#">
            <img src="{{ asset('images/cat.png') }}"
                alt="NekoTopUp Logo"
                height="32"
                class="d-inline-block align-text-top">
            ShiroNeko
        </a>
        <div class="ms-auto">
            <a href="/login" class="btn btn-outline-info btn-sm me-2">Login</a>
            <a href="/register" class="btn btn-info btn-sm text-dark">Register</a>
        </div>
    </div>
</nav>

<section class="hero">
    <!-- Carousel Background -->
        <div id="heroCarousel"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="5000"
        data-bs-pause="false">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/ml.jpg') }}" class="d-block w-100" alt="Mobile Legends">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/ff.jpg') }}" class="d-block w-100" alt="Free Fire">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/gi.jpg') }}" class="d-block w-100" alt="Genshin Impact">
            </div>
        </div>
    </div>


    <!-- Text Overlay -->
    <div class="hero-overlay container">
        <div>
            <h1 class="fw-bold display-5">
                Top Up Game Favoritmu<br>
                <span class="text-info">Cepat • Aman • Terpercaya</span>
            </h1>
            <p class="mt-3 text-white">
                Mobile Legends, Free Fire, Genshin Impact, dan lainnya
            </p>
            <a href="/login" class="btn btn-info btn-lg mt-3 text-dark fw-bold">
                Top Up Sekarang
            </a>
        </div>
    </div>
</section>

    <!-- ARTIKEL TENTANG SHIRONEKO -->
<section class="container my-5">
    <h3 class="text-center fw-bold mb-5 section-title">
        <img src="{{ asset('images/cat.png') }}"
             alt="ShiroNeko Logo"
             height="36"
             class="me-2">
        Mengenal ShiroNeko
    </h3>

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card feature-card p-4 p-md-5">
                <div class="card-body">

                    <h4 class="fw-bold mb-3 text-info">
                        ShiroNeko — Solusi Top Up Game Online untuk Gamer Indonesia
                    </h4>

                    <p class="text-muted">
                        Di era digital saat ini, kebutuhan akan top up game yang
                        <strong>cepat, aman, dan terpercaya</strong> menjadi hal yang sangat penting
                        bagi para gamer. <strong>ShiroNeko</strong> hadir sebagai marketplace top up
                        game online yang dirancang khusus untuk memberikan pengalaman transaksi
                        terbaik tanpa ribet.
                    </p>

                    <p class="text-muted">
                        Dengan dukungan berbagai game populer seperti
                        <strong>Mobile Legends, Free Fire, Genshin Impact, Valorant</strong>,
                        dan game favorit lainnya, ShiroNeko memastikan setiap pembelian item
                        digital dapat diproses secara <strong>instan dan akurat</strong>.
                    </p>

                    <hr class="border-secondary my-4">

                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="d-flex gap-3">
                                <div class="icon-box"></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Proses Cepat & Otomatis</h6>
                                    <p class="small text-muted mb-0">
                                        Sistem kami bekerja secara real-time sehingga
                                        item game langsung masuk ke akun kamu tanpa menunggu lama.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex gap-3">
                                <div class="icon-box"></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Aman & Terpercaya</h6>
                                    <p class="small text-muted mb-0">
                                        Tidak perlu login akun game.
                                        Cukup masukkan ID & Server — privasi kamu tetap terjaga.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex gap-3">
                                <div class="icon-box"></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Harga Bersahabat</h6>
                                    <p class="small text-muted mb-0">
                                        Kami menawarkan harga kompetitif dengan berbagai
                                        pilihan nominal top up sesuai kebutuhan gamer.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <hr class="border-secondary my-4">

                    <p class="text-muted">
                        ShiroNeko tidak hanya sekadar platform top up,
                        tetapi juga <strong>partner terpercaya</strong> bagi para gamer
                        yang ingin meningkatkan pengalaman bermain mereka.
                        Dengan tampilan modern, sistem stabil, dan dukungan game yang terus bertambah,
                        ShiroNeko siap menemani perjalanan gaming kamu.
                    </p>

                    <div class="text-center mt-4">
                        <a href="/login" class="btn btn-info btn-lg text-dark fw-bold px-4">
                            Mulai Top Up Sekarang
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- GAME LIST -->
<section class="container my-5">
    <h3 class="text-center mb-4 fw-bold">
    <img src="{{ asset('images/gamepad.png') }}"
        alt="NekoTopUp Logo"
            height="32"
            class="d-inline-block align-text-top">
            Game Populer
    </h3>
    <div class="row g-4">

        <!-- Mobile Legends -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="{{ asset('images/mlcc.png') }}" class="img-fluid mb-3">
                <h5>Mobile Legends</h5>
                <p class="text-secondary small">Top Up Diamond ML</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

        <!-- Free Fire -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="{{ asset('images/ff.jpg') }}" class="img-fluid mb-3">
                <h5>Free Fire</h5>
                <p class="text-secondary small">Top Up Diamond FF</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

        <!-- Genshin -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="/images/gi.jpg" class="img-fluid mb-3">
                <h5>Genshin Impact</h5>
                <p class="text-secondary small">Top Up Primogems</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

        <!-- Valorant -->
        <div class="col-md-3">
            <div class="game-card p-3 text-center h-100">
                <img src="/images/val.jpg" class="img-fluid mb-3">
                <h5>Valorant</h5>
                <p class="text-secondary small">Top Up VP</p>
                <a href="/login" class="btn btn-outline-info btn-sm">
                    Top Up Sekarang
                </a>
            </div>
        </div>

    </div>
</section>

<footer class="footer mt-5 pt-5 pb-3">
    <div class="container">
        <div class="row gy-4">

            <!-- Brand -->
            <div class="col-md-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="{{ asset('images/cat.png') }}" alt="NekoTopUp Logo" height="32">
                    <h5 class="fw-bold text-info mb-0">ShiroNeko</h5>
                </div>
                <p class="text-secondary small">
                    ShiroNeko adalah marketplace top up game online yang menyediakan
                    layanan cepat, aman, dan terpercaya untuk gamer Indonesia.
                </p>
            </div>

            <!-- Menu -->
            <div class="col-md-2">
                <h6 class="fw-bold mb-3">Menu</h6>
                <ul class="list-unstyled small">
                    <li><a href="#" class="footer-link">Beranda</a></li>
                    <li><a href="#" class="footer-link">Game Populer</a></li>
                    <li><a href="#" class="footer-link">Artikel</a></li>
                    <li><a href="#" class="footer-link">Tentang Kami</a></li>
                </ul>
            </div>

            <!-- Bantuan -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3">Bantuan</h6>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('cara-topup') }}" class="footer-link">Cara Top Up</a></li>
                    <li><a href="{{ route('faq') }}" class="footer-link">FAQ</a></li>
                    <li><a href="{{ route('privacy') }}" class="footer-link">Kebijakan Privasi</a></li>
                    <li><a href="{{ route('terms') }}" class="footer-link">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                <div class="d-flex gap-3 fs-5">
                    <a href="#" class="footer-social"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="footer-social"><i class="bi bi-discord"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center small text-secondary">
            © {{ date('Y') }} ShiroNeko. All rights reserved.
        </div>
    </div>
</footer>


    <!--JS UNTUK COURSEL-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--JS UNTUK NAVBAR-->
    <script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('mainNavbar');

    window.addEventListener('scroll', function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scroll ke bawah → navbar menghilang
            navbar.classList.add('navbar-hide');
        } else {
            // Scroll ke atas → navbar muncul
            navbar.classList.remove('navbar-hide');
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
</script>
