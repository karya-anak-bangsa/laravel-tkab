<?php

# halaman auth
use App\Http\Controllers\Auth\LoginController;

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
Route::get('/admin-tkab', [LoginController::class, 'index'])->name('login');

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Frontend
# ------------------------------------------------------------------------------------------------- #
Route::get('/', [LandingPageController::class, 'index'])->name('home');


# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend
# ------------------------------------------------------------------------------------------------- #
Route::prefix('admin')->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('hero', HeroController::class);
        Route::resource('services', ServicesController::class);
    });
