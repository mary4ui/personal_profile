<?php

use App\Http\Controllers\portfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [portfolioController::class,'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [protfolioController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [protfolioController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [protfolioController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
