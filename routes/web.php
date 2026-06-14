<?php

# halaman auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/tkab-login', [LoginController::class, 'index'])->name('login');
Route::post('/tkab-login', [LoginController::class, 'login'])->name('login.process');

Route::get('/tkab-register', [RegisterController::class, 'create'])->name('register');
Route::post('/tkab-register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/tkab-logout', [LoginController::class, 'logout'])->name('logout');
# ------------------------------------------------------------------------------------------------- #
# Route Halaman Frontend
# ------------------------------------------------------------------------------------------------- #
Route::get('/', [LandingPageController::class, 'index'])->name('home');


# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend
# ------------------------------------------------------------------------------------------------- #

Route::middleware('auth:employees')->prefix('admin')->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('hero', HeroController::class);
        Route::resource('services', ServicesController::class);
    });
