<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CartaoController;

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

// Buscar dados da empresa e seus cartões
Route::get('/empresa/{id}', [EmpresaController::class, 'show']);

// Cadastrar cartão de crédito para uma empresa
Route::post('/empresa/cartao', [CartaoController::class, 'store']);