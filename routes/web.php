<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnidadDeMedidaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', [ProductoController::class, 'index']);


Route::resource('unidad_de_medida', UnidadDeMedidaController::class);
Route::resource('marca', MarcaController::class);
Route::resource('categoria', CategoriaController::class)->parameters([
    'categoria' => 'categoria',
]);;
Route::resource('producto', ProductoController::class);