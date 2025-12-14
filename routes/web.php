<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::get('/articulos', [ArticulosController::class, 'index'])->name('articulos.index');

Route::get('/articulos/create', [ArticulosController::class, 'create'])->name('articulos.create');

Route::post('/articulos', [ArticulosController::class, 'store'])->name('articulos.store');

Route::get('/articulos/{articulo}', [ArticulosController::class, 'show'])->name('articulos.show');

Route::get('/articulos/{articulo}/edit', [ArticulosController::class, 'edit'])->name('articulos.edit');

Route::put('/articulos/{articulo}', [ArticulosController::class, 'update'])->name('articulos.update');

Route::delete('/articulos/{articulo}', [ArticulosController::class, 'destroy'])->name('articulos.destroy');





