<?php

use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\CiudadesUsuariosController;
use App\Http\Controllers\TiempoCiudadesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ZonaHorariaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('lugares-guardados', [CiudadesUsuariosController::class, 'index']);
// Route::get('lugares-guardados/{ciudadesUsuarios}', [CiudadesUsuariosController::class, 'show']);

// Route::get('tiempo-ciudades', [TiempoCiudadesController::class, 'index']);
// Route::get('tiempo-ciudades/{tiempoCiudades}', [TiempoCiudadesController::class, 'show']);

// Route::get('zona-horaria', [ZonaHorariaController::class, 'index']);
// Route::get('zona-horaria/{zonaHoraria}', [ZonaHorariaController::class, 'show']);


// GET
// Contiene los datos de las ciudades, sus zonas horarias y su tiempo
Route::get('ciudades', [CiudadesController::class, 'index']);
Route::get('ciudades/{idCiudad}', [CiudadesController::class, 'show']);

// Contiene los datos del usuario y sus lugares guardados
Route::get('usuarios', [UsuariosController::class, 'index']);
Route::get('usuarios/{usuarios}', [UsuariosController::class, 'show']);

// Devuelve el id del usuario que está logeado
Route::middleware('auth:sanctum')->get('/usuarioData', [AuthController::class, 'getAuthenticatedUser']);


// POST
// Registra un nuevo usuario
Route::post('register', [UsuariosController::class, 'store']);

// Guarda una ciudad en la lista de ciudades del usuario que se pase en el body del post
Route::middleware('auth:sanctum')->post('/guardar-ciudad', [CiudadesUsuariosController::class, 'store']);

// Loggea al usuario
Route::post('/login', [AuthController::class, 'login']);



Route::get('/health', function () {
  return response(null, 200);
});