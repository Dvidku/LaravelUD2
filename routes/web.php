<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosController;

Route::get('/', [ArticulosController::class, 'index']);
// Listado de artículos
Route::get('/articulos', [ArticulosController::class, 'index'])->name('articulos.index');

// Ver un artículo específico
Route::get('/articulos/{articulo}', [ArticulosController::class, 'show'])->name('articulos.show');

// Mostrar formulario de edición
Route::get('/articulos/{articulo}/edit', [ArticulosController::class, 'edit'])->name('articulos.edit');

// Actualizar artículo (PUT/PATCH)
Route::put('/articulos/{articulo}', [ArticulosController::class, 'update'])->name('articulos.update');

// Eliminar artículo
Route::delete('/articulos/{articulo}', [ArticulosController::class, 'destroy'])->name('articulos.destroy');
