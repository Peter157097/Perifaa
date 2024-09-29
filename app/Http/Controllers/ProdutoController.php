<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Tamanho;
use App\Models\Condicao;
use App\Models\Cor;
use App\Models\Favorito;
use App\Models\Carrinho;
use App\Models\Regiao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $query = Produto::query();

        // Filtros
        if ($request->filled('preco_ate')) {
            $precoAte = (float) $request->input('preco_ate');
            $query->where('valorProduto', '<=', $precoAte);
        }

        if ($request->filled('tamanho')) {
            $tamanhoIds = $request->input('tamanho');
            $query->whereIn('idTamanho', $tamanhoIds);
        }

        if ($request->filled('condicoes')) {
            $condicoes = $request->input('condicoes');
            $query->whereIn('idCondicao', $condicoes);
        }

        if ($request->filled('cores')) {
            $cores = $request->input('cores');
            $query->whereIn('idCor', $cores);
        }

        if ($request->filled('regioes')) {
            $regioes = $request->input('regioes');
            $query->whereIn('idRegiao', $regioes);
        }

        // Pegar dados
        $tamanhos = Tamanho::all();
        $condicoes = Condicao::all();
        $cores = Cor::all();
        $regioes = Regiao::all();
        $produtos = $query->paginate(8);
        $filtros = $request->all();

        // Passar o request explicitamente para a view
        return view('produtos', compact('produtos', 'tamanhos', 'condicoes', 'cores', 'regioes', 'filtros', 'request'));
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

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Perform a search on 'nomeProduto' and 'descricaoProduto'
        $pesquisa = Produto::where('nomeProduto', 'LIKE', "%$query%")
                            ->orWhere('descricaoProduto', 'LIKE', "%$query%");
        
        // Ensure that the result is paginated
        $produtos = $pesquisa->paginate(8);  // Now we use paginate here instead of get()
    
        // Retrieve other necessary data
        $tamanhos = Tamanho::all();
        $condicoes = Condicao::all();
        $cores = Cor::all();
        $regioes = Regiao::all();
        $filtros = $request->all();
    
        return view('produtos', compact('produtos', 'tamanhos', 'condicoes', 'cores', 'regioes', 'filtros', 'request'));
    }
    
}
