<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Favorito;
use App\Models\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdutoController extends Controller
{
    public function index()
    {
        // Use paginate em vez de get para obter uma instância paginada de produtos
        $produtos = Produto::paginate(8); // Paginar os produtos
        return view('produtos', compact('produtos'));
    }
    public function show($idProduto)
    {
        $produtos = Produto::find($idProduto);
        $clientId = Session::get('id');

        $carrinho = Carrinho::where('idProduto', $idProduto)
        ->where('idCliente', $clientId)
        ->exists();

        
        $favorited = Favorito::where('idProduto', $idProduto)
        ->where('idCliente', $clientId)
        ->exists();

        return view('entrar-produto', compact('produtos', 'favorited', 'carrinho'));
    }

}
