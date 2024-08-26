<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // Use paginate em vez de get para obter uma instância paginada de produtos
        $produtos = Produto::with(['cor', 'condicao', 'categoria', 'tamanho', 'regiao', 'vendedor'])->paginate(9); // Pagina 10 produtos por página

        return view('produtos', ['produtos' => $produtos]);
    }
}

