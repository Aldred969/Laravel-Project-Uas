<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // ambil user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // cek user & password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Email atau password salah');
        }

        // simpan session manual
        session([
            'user_id' => $user->id,
            'role' => $user->role,
            'name' => $user->name
        ]);

        // redirect berdasarkan role
        if ($user->role == 'admin') {
            return redirect('/admin/dashboard');
        }
        return redirect('/user/dashboard');
    }
}
