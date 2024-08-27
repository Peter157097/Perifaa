<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

use App\Models\Admin;
use App\Models\Vendedor;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/produto/store', [DashboardController::class, 'store'])->name('produto.store');

Route::post('/Cliente', [ClienteController::class, 'store']);

Route::post('/Vendedor', [VendedorController::class, 'store']);

Route::get('/perfil', function () {
    $nome = Session::get('nome');
    $email = Session::get('email');
    $id = Session::get('id');
    $numero = Session::get('numero');
    $logradouro = Session::get('logradouro');
    $cep = Session::get('cep');
    $cidade = Session::get('cidade');
    $estado = Session::get('estado');
    $numCasaCliente = Session::get('numCasaCliente');
    $imagemCliente = Session::get('imagemCliente');

    if ($nome && $email && $id && $numero && $logradouro && $cep && $cidade && $estado && $imagemCliente && $numCasaCliente) {
        return view('perfil', compact('nome', 'email', 'id', 'numero', 'logradouro', 'cep', 'cidade', 'estado', 'imagemCliente', 'numCasaCliente'));
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


Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');



Route::get('/entrar-produto/{idProduto}', [ProdutoController::class, 'show'])->name('show');

Route::get('/editarPerfillVendedor', function () {
    $nomeVendedor = Session::get('nomeVendedor');
    $emailVendedor = Session::get('emailVendedor');
    $idVendedor = Session::get('idVendedor');
    $numeroVendedor = Session::get('numeroVendedor');
    $logradouroVendedor = Session::get('logradouroVendedor');
    $cepVendedor = Session::get('cepVendedor');
    $cidadeVendedor = Session::get('cidadeVendedor');
    $estadoVendedor = Session::get('estadoVendedor');
    $numCasaVendedor = Session::get('numCasaVendedor');
    $imagemVendedor = Session::get('imagemVendedor');

    if ($nomeVendedor && $emailVendedor && $idVendedor && $numeroVendedor && $logradouroVendedor && $cepVendedor && $cidadeVendedor && $estadoVendedor && $imagemVendedor && $numCasaVendedor) {
        return view('editarPerfillVendedor', compact('nomeVendedor', 'emailVendedor', 'idVendedor', 'numeroVendedor', 'logradouroVendedor', 'cepVendedor', 'cidadeVendedor', 'estadoVendedor', 'imagemVendedor', 'numCasaVendedor'));
    } else {
        Session::flash('alert', 'Para acessar esta página, faça o login!');
        return redirect('/');
    }
}, [VendedorController::class, 'showProfile']);


Route::post('/editarPerfillVendedor/update', [VendedorController::class, 'update']);

// Rota para adminDenuncias
Route::get('/adminDenuncias', function () {
    return view('adminDenuncias');
}); 


// Rota para adminDenunciaProduto
Route::get('/adminDenunciaProduto', function () {
    return view('adminDenunciaProduto');
}); 


Route::get('/criaradmin', function () {
    return view('criaradmin');
}); 

Route::post('/admin', [AdminController::class, 'store']);
