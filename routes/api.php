<?php

use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\CiudadesUsuariosController;
use App\Http\Controllers\TiempoCiudadesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ZonaHorariaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ciudades', [CiudadesController::class, 'index']);
Route::get('ciudades/{idCiudad}', [CiudadesController::class, 'show']);

Route::get('lugares-guardados', [CiudadesUsuariosController::class, 'index']);
Route::get('lugares-guardados/{ciudadesUsuarios}', [CiudadesUsuariosController::class, 'show']);

Route::get('tiempo-ciudades', [TiempoCiudadesController::class, 'index']);
Route::get('tiempo-ciudades/{tiempoCiudades}', [TiempoCiudadesController::class, 'show']);

Route::get('zona-horaria', [ZonaHorariaController::class, 'index']);
Route::get('zona-horaria/{zonaHoraria}', [ZonaHorariaController::class, 'show']);

Route::get('usuarios', [UsuariosController::class, 'index']);
Route::get('usuarios/{usuarios}', [UsuariosController::class, 'show']);


// Route::apiResource('ciudades', CiudadesController::class);
// Route::apiResource('lugares-guardados', CiudadesUsuariosController::class);
// Route::apiResource('tiempo-ciudades', TiempoCiudadesController::class);
// Route::apiResource('usuarios', UsuariosController::class);
// Route::apiResource('zona-horaria', ZonaHorariaController::class);