<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\AuthController;


// Public Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (User & Admin)
Route::middleware('auth')->group(function () {
    Route::get('/deposits', [DepositController::class, 'index'])->name('deposits.index');
    Route::get('/deposits/create', [DepositController::class, 'create'])->name('deposits.create');
    Route::post('/deposits', [DepositController::class, 'store'])->name('deposits.store');
    Route::get('/deposits/{deposit}', [DepositController::class, 'show'])->name('deposits.show');
});

// Admin Routes (Admin Only)
Route::middleware(['auth', \App\Http\Middleware\IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    
    // Admin CRUD for Deposits
    Route::get('/deposits/{deposit}/edit', [DepositController::class, 'edit'])->name('deposits.edit');
    Route::put('/deposits/{deposit}', [DepositController::class, 'update'])->name('deposits.update');
    Route::delete('/deposits/{deposit}', [DepositController::class, 'destroy'])->name('deposits.destroy');
});