<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// General routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{slug}', [ShopController::class, 'productDetials'])->name('shop.product.details');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');


Auth::routes();

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/my-account', [UserController::class, 'index'])->name('user.index');
    Route::get('/admin', function () {
        if (auth()->check() && auth()->user()->utype == 'ADM') {
            return app(AdminController::class)->index();
        }
        session()->flush();
        return redirect()->route('login');
    })->name('admin.index');
});
