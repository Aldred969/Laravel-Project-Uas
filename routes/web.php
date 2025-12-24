<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\GameController;

Route::get('/', function () {
    return view('home');
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

//Kelola Game 

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/games', [GameController::class, 'index'])
        ->name('games.index');

    Route::get('/games/create', [GameController::class, 'create'])
        ->name('games.create');

    Route::post('/games/store', [GameController::class, 'store'])
        ->name('games.store');

    Route::get('/games/edit/{id}', [GameController::class, 'edit'])
        ->name('games.edit');

    Route::put('/games/update', [GameController::class, 'update'])
        ->name('games.update');

    Route::get('/games/delete/{id}', [GameController::class, 'destroy'])
        ->name('games.destroy');
});
//End