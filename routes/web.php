<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

Route::get('/', function () {
    return view('welcome');
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

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Rotas de admin para filmes
    Route::get('/admin/filmes', [FilmeController::class, 'index'])->name('admin.filmes.index');
    Route::get('/admin/filmes/create', [FilmeController::class, 'create'])->name('admin.filmes.create');
    Route::post('/admin/filmes', [FilmeController::class, 'store'])->name('admin.filmes.store');
    // etc.
});

Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/filmes', [AdminController::class, 'index'])->name('filmes.index');
    Route::get('/filmes/create', [AdminController::class, 'create'])->name('filmes.create');
    Route::post('/filmes', [AdminController::class, 'store'])->name('filmes.store');
    Route::get('/filmes/{filme}/edit', [AdminController::class, 'edit'])->name('filmes.edit');
    Route::put('/filmes/{filme}', [AdminController::class, 'update'])->name('filmes.update');
    Route::delete('/filmes/{filme}', [AdminController::class, 'destroy'])->name('filmes.destroy');
});

Route::get('/galeria', [FilmeController::class, 'galeria'])->name('filmes.galeria');
