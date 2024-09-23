<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnidadDeMedidaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', [ProductoController::class, 'index']);


Route::resource('unidad_de_medida', UnidadDeMedidaController::class);
Route::resource('marca', MarcaController::class);
Route::resource('categoria', CategoriaController::class)->parameters([
    'categoria' => 'categoria',
]);;
Route::resource('producto', ProductoController::class);