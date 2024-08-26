<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // Use paginate em vez de get para obter uma instância paginada de produtos
        $produtos = Produto::paginate(9); // Paginar os produtos
        return view('produtos', compact('produtos'));
    }
    public function show($idProduto)
    {
        $produtos = Produto::find($idProduto);
        return view('entrar-produto', compact('produtos'));
    }

}