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
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    public function index()
    {
        $tamanhos = Tamanho::all();
        $regioes = Regiao::all();
        $categorias = Categoria::all();
        $roupas = Roupa::all();
        $condicoes = Condicao::all();

        return view('cadastrarProdutosVendedor', [
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
            'imagemProduto2' => 'nullable|image|max:2048',
            'imagemProduto3' => 'nullable|image|max:2048',
            'imagemProduto4' => 'nullable|image|max:2048',
            'imagemProduto5' => 'nullable|image|max:2048',
        ]);
    
        $produto = new Produto();
        $produto->nomeProduto = $request->input('nomeProduto');
        $produto->valorProduto = $request->input('valorProduto');
        $produto->descricaoProduto = $request->input('descricaoProduto');
        $produto->idCor = $request->input('cor');
        $produto->idTamanho = $request->input('tamanho');
        $produto->idRegiao = $request->input('regiao');
        $produto->idCategoriaProduto = $request->input('categoria', null); 
        $produto->idGenero = $request->input('roupa');
        $produto->idCondicao = $request->input('condicao');
        $produto->idVendedor = Session::get('idVendedor');
    
        if ($request->hasFile('imagemProduto')) {
            $file = $request->file('imagemProduto');
            $filename = time() . '_1.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produtos'), $filename);
            $produto->imagemProduto = 'images/produtos/' . $filename;
        }
    
        if ($request->hasFile('imagemProduto2')) {
            $file = $request->file('imagemProduto2');
            $filename = time() . '_2.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produtos'), $filename);
            $produto->imagemProduto2 = 'images/produtos/' . $filename;
        }
    
        if ($request->hasFile('imagemProduto3')) {
            $file = $request->file('imagemProduto3');
            $filename = time() . '_3.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produtos'), $filename);
            $produto->imagemProduto3 = 'images/produtos/' . $filename;
        }
    
        if ($request->hasFile('imagemProduto4')) {
            $file = $request->file('imagemProduto4');
            $filename = time() . '_4.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produtos'), $filename);
            $produto->imagemProduto4 = 'images/produtos/' . $filename;
        
        }
        if ($request->hasFile('imagemProduto5')) {
            $file = $request->file('imagemProduto5');
            $filename = time() . '_5.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produtos'), $filename);
            $produto->imagemProduto5 = 'images/produtos/' . $filename;
        }
    
        $produto->save();
    
        Session::flash('cadastrarProdutosVendedor', 'Produto cadastrado com sucesso!');
        return redirect()->route('cadastrarProdutosVendedor');
    }
    
}
