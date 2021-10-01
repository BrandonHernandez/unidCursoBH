<?php

use App\Http\Controllers\Categoria\CategoriaController;
use App\Http\Controllers\Comprador\CompradorController;
use App\Http\Controllers\Producto\ProductoController;
use App\Http\Controllers\Transaccion\TransaccionController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('users', UserController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('comprador', CompradorController::class);
Route::resource('producto', ProductoController::class);
Route::resource('transaccion', TransaccionController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
