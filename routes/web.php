<?php

# halaman auth
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerifyEmailController;

# halaman frontend
use App\Http\Controllers\Public\LandingPageController;

# halaman Backend Admin
use App\Http\Controllers\Pages\DashboardController;
use App\Http\Controllers\Pages\HeroController;
use App\Http\Controllers\Pages\ServicesController;

# Other
use Illuminate\Support\Facades\Route;

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Auth
# ------------------------------------------------------------------------------------------------- #
Route::get('/tkab-register', [RegisterController::class, 'create'])->name('register');
Route::post('/tkab-register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/verify-email/{id}', [VerifyEmailController::class, 'create'])->name('verify.email.create');
Route::post('/verify-email/{id}', [VerifyEmailController::class, 'store'])->name('verify.email.store');
Route::post('/verify-email/{id}/resend', [VerifyEmailController::class, 'resend'])->name('verify.email.resend');

Route::get('/tkab-login', [LoginController::class, 'index'])->name('login');
Route::post('/tkab-login', [LoginController::class, 'login'])->name('login.process');
Route::post('/tkab-logout', [LoginController::class, 'logout'])->name('logout');


# ------------------------------------------------------------------------------------------------- #
# Route Halaman Frontend
# ------------------------------------------------------------------------------------------------- #
Route::get('/', [LandingPageController::class, 'index'])->name('home');


# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend
# ------------------------------------------------------------------------------------------------- #

Route::middleware(['auth:employees', 'verified.employee',])->prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('hero', HeroController::class);
        Route::resource('services', ServicesController::class);
    });

# ------------------------------------------------------------------------------------------------- #
