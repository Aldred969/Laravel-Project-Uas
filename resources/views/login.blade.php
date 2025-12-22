<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Game Top Up</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            background: #111;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0,255,255,0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            color: #fff;
        }

        .login-card h3 {
            font-weight: bold;
            color: #00ffd5;
        }

        .form-control {
            background: #1c1c1c;
            border: none;
            color: #fff;
        }

        .form-control:focus {
            background: #1c1c1c;
            color: #fff;
            box-shadow: 0 0 5px #00ffd5;
        }

        .btn-login {
            background: linear-gradient(45deg, #00ffd5, #00b3ff);
            border: none;
            color: #000;
            font-weight: bold;
        }

        .btn-login:hover {
            opacity: 0.9;
        }

        .game-icon {
            font-size: 50px;
            color: #00ffd5;
        }

        .error-text {
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-card text-center">
    <div class="mb-3">
        <i class="bi bi-controller game-icon"></i>
    </div>

    <h3 class="mb-4">Game Top Up Login</h3>

    <!-- Pesan Error -->
    @if(session('error'))
        <div class="alert alert-danger error-text">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <div class="mb-3 text-start">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <div class="mb-3 text-start">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="btn btn-login w-100 mt-2">
            Login
        </button>
    </form>
<!-- Link Register -->
<div class="text-center mt-3">
    <span class="text-secondary" style="font-size:14px;">
        Belum punya akun?
    </span>
    <a href="/register" class="text-info fw-bold text-decoration-none">
        Daftar di sini
    </a>
</div>
    <p class="mt-3 text-secondary" style="font-size:13px;">
        Marketplace Top Up Game Online
    </p>
</div>

</body>
</html>