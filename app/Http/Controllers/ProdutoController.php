<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        
        $produtos = Produto::with(['cor', 'condicao', 'categoria', 'tamanho', 'regiao', 'vendedor'])->get();
        return view('produtos',['produtos' => $produtos]);
    }
}
