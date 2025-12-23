<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // 1. Validasi password
        if ($request->password !== $request->password_confirmation) {
            return back()->with('error', 'Konfirmasi password tidak sesuai');
        }

        // 2. Cek email sudah terdaftar
        if (User::where('email', $request->email)->exists()) {
            return back()->with('error', 'Email sudah terdaftar');
        }

        // 3. Ambil role dari form (default user)
        $role = 'user';

        // 4. Kode verifikasi admin (hardcode untuk tugas)
        $ADMIN_CODE = 'AdminOnly';

        // 5. Jika memilih admin
        if ($request->role === 'admin') {

            // Jika kode admin kosong
            if (empty($request->admin_code)) {
                return back()->with('error', 'Kode verifikasi admin wajib diisi');
            }

            // Jika kode salah
            if ($request->admin_code !== $ADMIN_CODE) {
                return back()->with('error', 'Kode verifikasi admin salah');
            }

            // Jika lolos verifikasi
            $role = 'admin';
        }

        // 6. Simpan user ke database
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $role
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login');
    }
}
