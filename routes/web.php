<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MuseumsController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\ArtworkController; // Assicurati di aver incluso il controller corretto
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('home');
        Route::resource('museums', MuseumsController::class);
        Route::resource('artists', ArtistController::class);
        Route::resource('artworks', ArtworkController::class);
    });
require __DIR__.'/auth.php';