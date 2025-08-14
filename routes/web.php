<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\AdminController;

Route::aliasMiddleware('is_admin', IsAdmin::class);

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

Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes.index');
    Route::get('/filmes/create', [FilmeController::class, 'create'])->name('filmes.create');
    Route::post('/filmes', [FilmeController::class, 'store'])->name('filmes.store');
    Route::get('/filmes/{filme}/edit', [FilmeController::class, 'edit'])->name('filmes.edit');
    Route::put('/filmes/{filme}', [FilmeController::class, 'update'])->name('filmes.update');
    Route::delete('/filmes/{filme}', [FilmeController::class, 'destroy'])->name('filmes.destroy');
});

Route::get('/galeria', [FilmeController::class, 'galeria'])->name('filmes.galeria');


Route::get('/filmes/{id}', [FilmeController::class, 'detalhes'])->name('filmes.detalhes');
