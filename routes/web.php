<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterCollegeController;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('login.store');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/registerstudent', [RegisterCollegeController::class, 'index'])->name('registercollege');
    Route::post('/registerstudent', [RegisterCollegeController::class, 'store'])->name('registercollege.store');

    Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
});

Route::middleware('admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::resource('/users', UserController::class);
});
