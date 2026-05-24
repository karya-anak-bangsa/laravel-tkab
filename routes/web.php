<?php

# halaman frontend
use App\Http\Controllers\Public\LandingPageController;

# halaman Backend Admin
use App\Http\Controllers\Pages\DashboardController;

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

        # Bagian 1 - Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
