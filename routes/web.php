<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

Route::get('/', function () {
    return redirect()->route('filmes.galeria');
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

// Admin (CRUD de filmes)
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [FilmeController::class, 'index'])->name('index');
    Route::get('/create', [FilmeController::class, 'create'])->name('create');
    Route::post('/', [FilmeController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [FilmeController::class, 'edit'])->name('edit');
    Route::put('/{id}', [FilmeController::class, 'update'])->name('update');
    Route::delete('/{id}', [FilmeController::class, 'destroy'])->name('destroy');
});

// Seção do usuário
Route::get('/galeria', [FilmeController::class, 'galeria'])->name('filmes.galeria');
Route::get('/filmes/{id}', [FilmeController::class, 'detalhes'])->name('filmes.detalhes');
