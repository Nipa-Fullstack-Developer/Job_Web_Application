<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'registerStore'])->name('register.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/store', [AuthController::class, 'loginStore'])->name('login.store');

//  dash
Route::group(['middleware' => 'user'], function() {
    Route::get('/user/dashboard',[DashboardController::class, 'dashboard'])->name('user.dashboard');
});