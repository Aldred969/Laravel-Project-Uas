<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | Game Top Up</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
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

        .register-card {
            background: #111;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0,255,255,0.2);
            padding: 30px;
            width: 100%;
            max-width: 450px;
            color: #fff;
        }

        .register-card h3 {
            font-weight: bold;
            color: #00ffd5;
        }

        .form-control, .form-select {
            background: #1c1c1c;
            border: none;
            color: #fff;
        }

        .form-control:focus, .form-select:focus {
            background: #1c1c1c;
            color: #fff;
            box-shadow: 0 0 5px #00ffd5;
        }

        .btn-register {
            background: linear-gradient(45deg, #00ffd5, #00b3ff);
            border: none;
            color: #000;
            font-weight: bold;
        }

        .btn-register:hover {
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

<div class="register-card text-center">
    <div class="mb-3">
        <i class="bi bi-person-plus-fill game-icon"></i>
    </div>

    <h3 class="mb-4">Register Akun</h3>

    <!-- Alert Error -->
    @if(session('error'))
        <div class="alert alert-danger error-text">
            {{ session('error') }}
        </div>
    @endif

    <!-- Alert Success -->
    @if(session('success'))
        <div class="alert alert-success error-text">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf

        <div class="mb-3 text-start">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="mb-3 text-start">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <div class="mb-3 text-start">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <div class="mb-3 text-start">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
        </div>

        <div class="mb-3 text-start">
            <label>Daftar Sebagai</label>
            <select name="role" class="form-select" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-register w-100 mt-2">
            Register
        </button>
    </form>

    <!-- Link Login -->
    <div class="text-center mt-3">
        <span class="text-secondary" style="font-size:14px;">
            Sudah punya akun?
        </span>
        <a href="/login" class="text-info fw-bold text-decoration-none">
            Login di sini
        </a>
    </div>

    <p class="mt-3 text-secondary" style="font-size:13px;">
        Marketplace Top Up Game Online
    </p>
</div>

</body>
</html>
