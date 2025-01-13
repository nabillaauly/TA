<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;


Route::get('/', [FrontController::class, 'index']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/contact', [FrontController::class, 'contact']);

Route::get('/forum', [FrontController::class, 'forum']);

Route::get('/rekomendasi', [FrontController::class, 'rekomendasi']);

Route::get('/recruitment', [FrontController::class, 'recruitment']);

Route::get('/padus', [FrontController::class, 'padus']);

Route::get('/register', [FrontController::class, 'register'])->name('register');


Route::middleware(['auth', 'can:manage ukm'])->group(function () {
    Route::resource('ukm', UkmController::class);
});

 Route::middleware(['auth', 'can: manage pengguna'])->group(function () {
    Route::resource('users', UserController::class);
 });
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
