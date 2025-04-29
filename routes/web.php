<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ChoirRegistrationController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\RecommendationController;


Route::get('/', [FrontController::class, 'index']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/contact', [FrontController::class, 'contact']);

Route::get('/forum', [FrontController::class, 'forum']);

Route::get('/rekomendasi', [FrontController::class, 'rekomendasi']);

Route::get('/recruitment', [FrontController::class, 'recruitment']);

Route::get('/padus', [FrontController::class, 'padus']);

// route::get('/riwayat_pendaftaran', [FrontController::class, 'history'])->name('history');

Route::get('/riwayat_pendaftaran', [RecruitmentController::class, 'riwayat'])->name('ukm.Riwayat_pendaftaran');

Route::get('/history', [UserController::class, 'riwayat'])->name('user.Riwayat_pendaftaran');

Route::get('/register', [FrontController::class, 'register'])->name('register');

Route::post('/choir/register', [ChoirRegistrationController::class, 'store'])->name('choir.register');

route::post('/recruitment/register', [RecruitmentController::class, 'store'])->name('recruitment.register');

Route::post('/get-recommendations', [RecommendationController::class, 'match']);
Route::get('/recommendation', [RecommendationController::class, 'index'])->name('ukm.recomendation');
Route::post('/admin/store', [RecommendationController::class, 'storeAdmin']);

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
