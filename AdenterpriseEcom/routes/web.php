<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// General routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{slug}', [ShopController::class, 'productDetials'])->name('shop.product.details');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::get('/wishlist', [WishlistController::class, 'getWishlistedProducts'])->name('wishlist.list');
Route::post('/wishlist/add', [WishlistController::class, 'addProductToWishlist'])->name('wishlist.store');
Route::delete('/wishlist/remove', [WishlistController::class, 'removeProductFromWishlist'])->name('wishlist.remove');
Route::delete('/wishlist/clear', [WishlistController::class, 'clearWishlist'])->name('wishlist.clear');
Route::post('/wishlist/move-to-cart', [WishlistController::class, 'moveToCart'])->name('wishlist.move.to.cart');
Route::get('/auth/google', [SocialiteController::class, 'googleLogin'])->name('google.login');
Route::get('/auth/callback', [SocialiteController::class, 'googleAuthentication'])->name('auth.callback');

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
