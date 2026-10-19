<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Rotas protegidas por Sanctum
// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/api/logout', [AuthController::class, 'logout']);
//     Route::get('/api/me', [AuthController::class, 'me']);
//     Route::get('/api/user', function (Request $request) {
//         return $request->user();
//     });
// });

// Rota simples usando Closure (Função Anônima)
// Route::post('/api/registry/{user_id}', function () {
//     return response()->json([
//         'sucesso' => true,
//         'mensagem' => 'Olá, esta é a minha API no Laravel 8!'
//     ]);
// });

// Rota simples usando Closure (Função Anônima)
// Route::get('/api/login/{service_code}', function () {
//     return response()->json([
//         'sucesso' => true,
//         'mensagem' => 'Olá, esta é a minha API no Laravel 8!'
//     ]);
// });

// Route::get('/api/login/{service_code}', [AuthController::class, 'login']);

// User
Route::apiResource('login/{service_code}/', UserController::class);
// Route::post("login/{service_code}", [UserController::class, 'login']);
