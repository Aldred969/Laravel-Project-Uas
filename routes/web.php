<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

//Route Login

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin/dashboard', function () {

    if (!session()->has('user_id') || session('role') != 'admin') {
        return redirect('/login');
    }

    return view('admin.dashboard');
});

Route::get('/user/dashboard', function () {

    if (!session()->has('user_id') || session('role') != 'user') {
        return redirect('/login');
    }

    return view('user.dashboard');
});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
});
// End Route Login

//Register Akun Routes
Route::get('/register', function () {
    return view('register');
}); //Test1

Route::post('/register', [RegisterController::class, 'register']);
//end
