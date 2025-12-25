<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\User\GameController as UserGameController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\TopupController;

//Route Home dll
Route::get('/', function () {
    return view('home');
});

Route::get('/cara-topup', function () {
    return view('cara-topup');
})->name('cara-topup');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
//end

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


//Route Transaksi
Route::prefix('admin')->group(function () {

    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::get('/transactions/{id}', [TransactionController::class, 'show']);
    Route::post('/transactions/{id}/update-status', [TransactionController::class, 'updateStatus']);

});

Route::prefix('admin')->group(function () {

    Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');

    Route::get('/products/create', [ProductController::class, 'create'])
        ->name('products.create');

    Route::post('/products', [ProductController::class, 'store'])
        ->name('products.store');

    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
        ->name('products.edit');

    Route::put('/products/{id}', [ProductController::class, 'update'])
        ->name('products.update');

    Route::delete('/products/{id}', [ProductController::class, 'destroy'])
        ->name('products.destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/transactions', [TransactionController::class, 'index'])
        ->name('transactions.index');

    Route::get('/transactions/{id}', [TransactionController::class, 'show'])
        ->name('transactions.show');

    Route::post('/transactions/{id}/update-status',
        [TransactionController::class, 'updateStatus'])
        ->name('transactions.updateStatus');

});

Route::prefix('user')->name('user.')->group(function () {

    // list game
    Route::get('/games', [UserGameController::class, 'index'])
        ->name('games.index');

    // detail game
    Route::get('/games/{id}', [UserGameController::class, 'show'])
        ->name('games.show');

    // checkout topup (POST)
    Route::post('/topup/checkout', [TopupController::class, 'checkout'])
        ->name('topup.checkout');

});

Route::get('/user/dashboard', function () {

    if (!session()->has('user_id') || session('role') != 'user') {
        return redirect('/login');
    }

    return view('user.dashboard');
});

Route::get('/user/games', [UserGameController::class, 'index']);

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

