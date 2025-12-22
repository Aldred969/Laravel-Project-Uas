<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Akun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Card -->
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Register Akun</h4>
                </div>

                <div class="card-body">

                    <!-- Alert Error -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Alert Success -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Form Register -->
                    <form method="POST" action="/register">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                        </div>
                        <div class="mb-3">
                        <label>Daftar Sebagai</label>
                            <select name="role" class="form-control" required>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                             </select>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </form>

                </div>

                <div class="card-footer text-center">
                    Sudah punya akun?
                    <a href="/login">Login di sini</a>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>