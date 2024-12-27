<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/forum', function () {
    return view('pages/forum');
});

Route::get('/rekomendasi', function () {
    return view('pages/rekomendasi');
});

Route::get('/recruitment', function () {
    return view('pages/recruitment');
});

Route::get('/padus', function () {
    return view('pages/padus');
});


// Route::middleware(['auth', 'can:manage users'])->group(function () {
    Route::resource('users', UserController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
