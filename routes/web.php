<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('/categorias/create', [App\Http\Controllers\CategoriaController::class, 'create']);
Route::post('/categorias/insert', [App\Http\Controllers\CategoriaController::class, 'insert']);
Route::get('/categorias/{id}/edit', [App\Http\Controllers\CategoriaController::class, 'edit']);
Route::post('/categorias/update/{id}', [App\Http\Controllers\CategoriaController::class, 'update']);
Route::get('/categorias/{id}/delete', [App\Http\Controllers\CategoriaController::class, 'delete']);
Route::get('/categorias/prueba', [App\Http\Controllers\CategoriaController::class, 'prueba']);
Route::get('/articulos/prueba', [App\Http\Controllers\articuloController::class, 'prueba']);
Route::get('/articulos', [App\Http\Controllers\articuloController::class, 'index']);
Route::get('/articulos/create', [App\Http\Controllers\articuloController::class, 'create']);
Route::post('/articulos/insert', [App\Http\Controllers\articuloController::class, 'insert']);
Route::get('/articulos/export', [App\Http\Controllers\articuloController::class, 'export']);
