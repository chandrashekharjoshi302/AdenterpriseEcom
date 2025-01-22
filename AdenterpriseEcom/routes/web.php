<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// General routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [AppController::class, 'index'])->name('app.index');

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
