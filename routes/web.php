<?php

# halaman frontend
use App\Http\Controllers\Public\LandingPageController;

# halaman Backend Admin
use App\Http\Controllers\Pages\DashboardController;
use App\Http\Controllers\Pages\HeroController;

# Other
use Illuminate\Support\Facades\Route;


# ------------------------------------------------------------------------------------------------- #
# Route Halaman Frontend -------------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::get('/', [LandingPageController::class, 'index'])->name('home');


# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Admin ------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::prefix('admin')->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('hero', HeroController::class);
    });
