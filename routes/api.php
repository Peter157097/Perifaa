<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;

Route::get('/mensagens/{idVendedor}', [MensagemController::class, 'carregarHistorico']);
Route::post('/mensagens/{idVendedor}', [MensagemController::class, 'enviarMensagem']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
