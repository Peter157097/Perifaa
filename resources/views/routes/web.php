<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/Cliente', [ClienteController::class, 'store']);

Route::get('/perfil', function () {
    $nome = Session::get('nome');
    $email = Session::get('email');
    $id = Session::get('id');
    $numero = Session::get('numero');
    $logradouro = Session::get('logradouro');
    $cep = Session::get('cep');
    $cidade = Session::get('cidade');
    $estado = Session::get('estado');

    if ($nome && $email && $id && $numero && $logradouro && $cep && $cidade && $estado) {
        return view('perfil', compact('nome', 'email', 'id', 'numero', 'logradouro', 'cep', 'cidade', 'estado'));
    } else {
        Session::flash('alert', 'Para acessar esta página, faça o login!');
        return redirect('/');
    }
}, [ClienteController::class, 'showProfile']);


// Processa a atualização do perfil
Route::post('/perfil/update', [ClienteController::class, 'update']);

// Processar o login
Route::post('/login', [AuthController::class, 'login']);

// Rota para logout
Route::get('/logout', [AuthController::class, 'logout']);

// Rota para editarPerfilvendedor
Route::get('/editarPerfillVendedor', function () {
    return view('editarPerfillVendedor');
});
