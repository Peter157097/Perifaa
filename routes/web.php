<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\UserController;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Denuncia;
use App\Models\Admin;
use App\Models\Vendedor;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/cadastrarProdutosVendedor', [DashboardController::class, 'index'])->name('cadastrarProdutosVendedor');
Route::post('/cadastrarProdutosVendedor', [DashboardController::class, 'store'])->name('produtos.store');
Route::post('/produtos', [DashboardController::class, 'store'])->name('produtos.store');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');



Route::get('/entrar-produto/{idProduto}', [ProdutoController::class, 'show'])->name('show');

Route::get('/editarPerfilVendedor', function () {
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
        $idVendedor = Session::get('idVendedor');
    
    
        if (!$idVendedor) {
            // Redireciona se não houver vendedor logado
            return redirect()->route('login')->with('error', 'Você precisa estar logado.');
        }
    
        $vendedor = Vendedor::find($idVendedor);
    
        if (!$vendedor) {
            // Redireciona se o vendedor não for encontrado
            return redirect()->route('login')->with('error', 'Vendedor não encontrado.');
        }

        return view('/editarPerfilVendedor', compact('nomeVendedor', 'emailVendedor', 'idVendedor', 'numeroVendedor', 'logradouroVendedor', 'cepVendedor', 'cidadeVendedor', 'estadoVendedor', 'imagemVendedor', 'numCasaVendedor', 'vendedor'));
    } else {
        Session::flash('alert', 'Para acessar esta página, faça o login!');
        return redirect('/editarPerfilVendedor');
    }
}, [VendedorController::class, 'showProfile']);


Route::post('/editarPerfilVendedor/update', [VendedorController::class, 'update']);

// Rota para adminDenuncias
Route::get('/adminDenuncias', function () {
    return view('adminDenuncias');
}); 

Route::get('/mensagens', function () {
    return view('mensagens');
}); 
Route::get('/pedidos', function () {
    return view('pedidos');
}); 




Route::get('/criaradmin', function () {
    return view('criaradmin');
}); 

Route::post('/admin', [AdminController::class, 'store']);

// Rota para carrinho
Route::get('/carrinho', function () {
    return view('carrinho');
}); 

//Favoritos
Route::get('/favorites', [FavoritoController::class, 'index2'])->name('favorites.index');
Route::post('/favorites', [FavoritoController::class, 'store'])->name('favorites.store');
Route::delete('/favorites/{product}', [FavoritoController::class, 'destroy'])->name('favorites.destroy');
Route::post('/favorites/add', [FavoritoController::class, 'addFavorite'])->name('favorites.add');
Route::post('/favorites/toggle', [FavoritoController::class, 'toggleFavorite'])->name('favorites.toggle');

// Rota para carrinho
Route::get('/carrinho', [CarrinhoController::class, 'index2'])->name('carrinho.index');
Route::post('/carrinho', [CarrinhoController::class, 'store'])->name('carrinho.store');
Route::delete('/carrinho/{product}', [CarrinhoController::class, 'destroy'])->name('carrinho.destroy');
Route::post('/carrinho/add', [CarrinhoController::class, 'addCarrinho'])->name('carrinho.add');
Route::post('/carrinho/toggle', [CarrinhoController::class, 'toggleCarrinho'])->name('carrinho.toggle');

Route::post('/cadastrarDenuncia', [DenunciaController::class, 'store'])->name('Denuncia.store');
// Rota para Denuncia
Route::get('/dashAdminDenuncias', function () {
    $denuncias = Denuncia::with(['cliente','produto','vendedor'])->get();

    return view('dashAdminDenuncias', [
        'denuncias' => $denuncias,
    ]);
});
Route::get('/dashAdmin', function () {
    $denuncias = Denuncia::with(['cliente','produto','vendedor'])->get();

    return view('/dashAdmin', [
        'denuncias' => $denuncias,
    ]);
});


Route::delete('/denuncia/{idDenuncia}', [DenunciaController::class, 'destroy'])->name('denuncia.destroy');



Route::get('/dashAdminConsulta', function () {
    return view('dashAdminConsulta');
});
Route::get('/dashAdminResultConsulta', function () {
    return view('dashAdminResultConsulta');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::post('/cadastrarProdutosVendedor', [DashboardController::class, 'index'])->name('produto.store');
Route::get('/produtos/search', [ProdutoController::class, 'search'])->name('produtos.search');

Route::get('/dashboardVendedor', [VendedorController::class, 'index'])->name('dashboardVendedor');

Route::get('/filtro-usuarios', function () {
    return view('filtro-usuarios');
})->name('filtro-usuarios');

Route::post('/filtro-usuarios', [UserController::class, 'filtrarUsuarios'])->name('filtrar-usuarios');

// Rota para o produtosVendedor
Route::get('/produtosVendedor', [ProdutoController::class, 'edit'])->name('produtosVendedor');
Route::post('/produtos/{idProduto}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{idProduto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
