<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // validasi sederhana
        if ($request->password !== $request->password_confirmation) {
            return back()->with('error', 'Konfirmasi password tidak sesuai');
        }

        // cek email sudah terdaftar
        $checkEmail = User::where('email', $request->email)->first();
        if ($checkEmail) {
            return back()->with('error', 'Email sudah terdaftar');
        }

        // simpan user baru
    User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
    'role' => $request->role // ← ambil dari form
    ]);


        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login');
    }
}
