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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


use Laravel\Passport\Http\Controllers;
use App\Http\Controllers\AuthController;

// Route::group(['middleware' => 'api'], function () {
//     Route::post('/oauth/token', [
//         'uses' => 'AccessTokenController@issueToken',
//         'middleware' => 'throttle',
//     ]);

//     Route::post('/oauth/token/refresh', [
//         'uses' => 'TransientTokenController@refresh',
//         'middleware' => 'auth:api',
//     ]);

//     Route::delete('/oauth/tokens/{token_id}', [
//         'uses' => 'AuthorizedAccessTokenController@destroy',
//         'middleware' => 'auth:api',
//     ]);

//     Route::get('/oauth/tokens', [
//         'uses' => 'AuthorizedAccessTokenController@forUser',
//         'middleware' => 'auth:api',
//     ]);

//     Route::post('/oauth/clients', [
//         'uses' => 'ClientController@store',
//         'middleware' => 'auth:api',
//     ]);

//     Route::delete('/oauth/clients/{client_id}', [
//         'uses' => 'ClientController@destroy',
//         'middleware' => 'auth:api',
//     ]);

//     Route::get('/oauth/clients', [
//         'uses' => 'ClientController@forUser',
//         'middleware' => 'auth:api',
//     ]);

//     Route::get('/oauth/scopes', [
//         'uses' => 'ScopeController@all',
//         'middleware' => 'auth:api',
//     ]);
// });


// GET
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

// POST
Route::post('usuarios/post', [UsuariosController::class, 'store']);
Route::post('usuario-ciudad/post', [CiudadesUsuariosController::class, 'store']);

Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout']);

// Route::group(['middleware' => 'auth:sanctum'], function () {
//     Route::apiResource('usuarios', UsuariosController::class);
// });