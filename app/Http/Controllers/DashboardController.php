<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cor;
use App\Models\Tamanho;
use App\Models\Regiao;
use App\Models\Categoria;
use App\Models\Roupa;
use App\Models\Condicao;
use App\Models\Produto;


class DashboardController extends Controller
{
    public function index()
    {
        $tamanhos = Tamanho::all();
        $regioes = Regiao::all();
        $categorias = Categoria::all();
        $roupas = Roupa::all();
        $condicoes = Condicao::all();

        return view('dashboard', [
            'cores' => Cor::all(),
            'tamanhos' => $tamanhos,
            'regioes' => $regioes,
            'categorias' => $categorias,
            'roupas' => $roupas,
            'condicoes' => $condicoes,
        ]);
    }

    public function store(Request $request)
    {



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
            'imagemProduto' => 'nullable|image|max:2048',
        ]);



        // Criar um novo registro de produto
        $produto = new Produto();
        $produto->nomeProduto = $request->input('nomeProduto');
        $produto->valorProduto = $request->input('valorProduto');
        $produto->descricaoProduto = $request->input('descricaoProduto');
        $produto->idCor = $request->input('cor');
        $produto->idTamanho = $request->input('tamanho');
        $produto->idRegiao = $request->input('regiao');
        $produto->idCategoriaProduto = $request->input('categoria', null); // Pode ser nulo
        $produto->idGenero = $request->input('roupa');
        $produto->idCondicao = $request->input('condicao');
        $produto->idVendedor = 1; // Definir idVendedor como 1

        if ($request->hasFile('imagemProduto')) {
            $file = $request->file('imagemProduto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Move o arquivo para o diretório public/images
            $file->move(public_path('images/produtos'), $filename);
            $produto->imagemProduto = 'images/produtos/' . $filename; // Caminho relativo
        }


        // Salvar no banco de dados
        $produto->save();




        return redirect()->route('dashboard')->with('success', 'Produto cadastrado com sucesso!');
    }
}
