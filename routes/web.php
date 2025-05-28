<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplierController;
use App\Http\Controllers\NewJobApplierController;
use Illuminate\Support\Facades\Route;

// homepage routes

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobapplier/details', [HomeController::class, 'details'])->name('jobapplier.details');
Route::get('/jobapplier/details/{jobapplier}', [HomeController::class, 'detailsShow'])->name('jobapplier.details.show');

// homepage routes end

// authentication routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'registerStore'])->name('register.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/store', [AuthController::class, 'loginStore'])->name('login.store');

Route::get('/', [AuthController::class, 'logout'])->name('logout');
// authentication routes

// dashboard routes
Route::group(['middleware' => 'user'], function () {
    Route::get('/user/dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');
});


Route::prefix('user/jobapplier/')->name('user.jobapplier.')->group(function () {

    Route::get('edit/{jobapplier}',[JobApplierController::class, 'edit'])->name('edit');
    Route::get('iamge/edit/{jobapplier}',[JobApplierController::class, 'editImage'])->name('image.edit');
    Route::get('delete/{jobapplier}', [JobApplierController::class, 'destroy'])->name('destroy');

    Route::post('store', [NewJobApplierController::class, 'store'])->name('store');
    Route::put('update/{jobapplier}', [JobApplierController::class, 'update'])->name('update');
    Route::put('image/update/{jobapplier}', [JobApplierController::class, 'updateImage'])->name('image.update');

})->middleware('user');

// dashboard route ends 
