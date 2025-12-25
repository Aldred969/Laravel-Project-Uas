<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        .navbar {
            background: #000;
            box-shadow: 0 0 15px rgba(0,255,255,0.2);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2" href="#">
            <img src="{{ asset('images/cat.png') }}" height="30">
            ShiroNeko Admin
        </a>

        <div class="ms-auto d-flex align-items-center gap-3">
            <span class="text-white small">
                <i class="bi bi-shield-lock-fill text-info"></i>
                {{ session('name') }}
            </span>
            <a href="/logout" class="btn btn-outline-info btn-sm">Logout</a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>
