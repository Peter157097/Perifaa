<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Tamanho;
use App\Models\Condicao;
use App\Models\Categoria;
use App\Models\Cor;
use App\Models\Vendedor;
use App\Models\Favorito;
use App\Models\Carrinho;
use App\Models\Regiao;
use App\Models\Genero;
use App\Models\Cliente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdutoController extends Controller
{


    public function index(Request $request)
    {
        $clienteId = Session::get('id');
        $cliente = Cliente::find($clienteId);

        if ($cliente) {
            $preferenciaGenero = $cliente->preferencia;
        } else {
            $preferenciaGenero = null;
        }

        $query = Produto::query();

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
        if ($request->filled('categorias')) {
            $categorias = $request->input('categorias');
            $query->whereIn('idCategoriaProduto', $categorias);
        }

        if ($request->filled('cores')) {
            $cores = $request->input('cores');
            $query->whereIn('idCor', $cores);
        }

        if ($request->filled('regioes')) {
            $regioes = $request->input('regioes');
            $query->whereIn('idRegiao', $regioes);
        }

        // Definir a condição para gênero e ordenar de acordo com a preferência
        if ($preferenciaGenero) {

            $query->orderByRaw("CASE 
                WHEN idGenero = " . ($preferenciaGenero == 'masculina' ? 1 : 2) . " THEN 0 
                ELSE 1 
            END");
        }


        $query->orderBy('idProduto', 'desc');

        // Pegar dados adicionais
        $clientId = Session::get('id');
        $tamanhos = Tamanho::all();
        $condicoes = Condicao::all();
        $cores = Cor::all();
        $regioes = Regiao::all();
        $genero = Genero::all();
        $categorias = Categoria::all();

        // Paginar os resultados
        $produtos = $query->paginate(10);
        $filtros = $request->all();
        

        // Passar o request e os filtros explicitamente para a view
        return view('produtos', compact('produtos', 'tamanhos', 'condicoes', 'cores', 'regioes', 'filtros', 'genero', 'categorias', 'request'));
    }


    public function show($idProduto)
    {
        $produtos = Produto::find($idProduto);
        $clientId = Session::get('id');
        if (!$produtos) {
            abort(404);
        }

        $vendedor = Vendedor::find($produtos->idVendedor);

        $carrinho = Carrinho::where('idProduto', $idProduto)
            ->where('idCliente', $clientId)
            ->exists();

        $favorited = Favorito::where('idProduto', $idProduto)
            ->where('idCliente', $clientId)
            ->exists();
            

        return view('entrar-produto', compact('produtos', 'favorited', 'carrinho','vendedor'));
    }
    
    

    public function destroy($idProduto)
    {
        $produto = Produto::find($idProduto);

        if (!$produto) {
            return redirect()->back()->with('error', 'Produto não encontrado.');
        }

        // Deleta o produto
        $produto->delete();

        return redirect()->route('produtosVendedor')->with('success', 'Produto deletado com sucesso.');
    }


    public function edit()
    {
        $idVendedor = Session::get('idVendedor');

        if (!$idVendedor) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado.');
        }

        $vendedor = Vendedor::find($idVendedor);

        if (!$vendedor) {
            return redirect()->route('login')->with('error', 'Vendedor não encontrado.');
        }

        // Busca os produtos do vendedor
        $produtos = $vendedor->produtos;
        $cores = Cor::all(); // Assumindo que você tem um modelo Cor
        $tamanhos = Tamanho::all(); // Assumindo que você tem um modelo Tamanho
        $categorias = Categoria::all();
        $generos = Genero::all();
        $regioes = Regiao::all();
        $condicoes = Condicao::all();

        return view('produtosVendedor', [
            'vendedor' => $vendedor,
            'produtos' => $produtos,
            'cores' => $cores,
            'tamanhos' => $tamanhos,
            'categorias' => $categorias,
            'generos' => $generos,
            'regioes' => $regioes,
            'condicoes' => $condicoes,
        ]);
    }

    public function update(Request $request, $idProduto)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'nomeProduto' => 'required|string|max:100',
            'valorProduto' => 'required|numeric',
            'descricaoProduto' => 'required|string|max:250',
            'cor' => 'required|exists:tbCor,idCor',
            'tamanho' => 'required|exists:tbTamanho,idTamanho',
            'regiao' => 'required|exists:tbRegiao,idRegiao',
            'categoria' => 'nullable|exists:tbCategoriaProduto,idCategoriaProduto',
            'roupa' => 'required|exists:tbGenero,idGenero',
            'condicao' => 'required|exists:tbCondicao,idCondicao',
            'imagemProduto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Encontrar o produto
        $produto = Produto::find($idProduto);

        if (!$produto) {
            return redirect()->back()->with('error', 'Produto não encontrado.');
        }

        // Atualizar os dados do produto
        $produto->nomeProduto = $validated['nomeProduto'];
        $produto->valorProduto = $validated['valorProduto'];
        $produto->descricaoProduto = $validated['descricaoProduto'];
        $produto->idCor = $validated['cor'];
        $produto->idTamanho = $validated['tamanho'];
        $produto->idRegiao = $validated['regiao'];
        $produto->idCategoriaProduto = $validated['categoria'] ?? $produto->idCategoriaProduto;
        $produto->idGenero = $validated['roupa'];
        $produto->idCondicao = $validated['condicao'];

        if ($request->hasFile('imagemProduto')) {
            $file = $request->file('imagemProduto');
            $filename = time() . '_1.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produtos'), $filename);
            $produto->imagemProduto = 'images/produtos/' . $filename;
        }
        // Salvar as alterações no banco de dados
        $produto->save();

        return redirect()->route('produtosVendedor')->with('success', 'Produto atualizado com sucesso.');
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
