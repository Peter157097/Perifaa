<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cor;
use App\Models\Tamanho;
use App\Models\Regiao;
use App\Models\Categoria;
use App\Models\Roupa;
use App\Models\Genero;
use App\Models\Condicao;
use App\Models\Produto;
use App\Models\Vendedor;
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

        $idVendedor = Session::get('idVendedor');


        if (!$idVendedor) {

            return redirect()->route('login')->with('error', 'Você precisa estar logado.');
        }

        $vendedor = Vendedor::find($idVendedor);

        if (!$vendedor) {

            return redirect()->route('login')->with('error', 'Vendedor não encontrado.');
        }


    

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

        return view('cadastrarProdutosVendedor', [
            'vendedor' => $vendedor,
            'produtos' => $produtos,
            'roupas' => $roupas,
            'cores' => $cores,
            'tamanhos' => $tamanhos,
            'categorias' => $categorias,
            'generos' => $generos,
            'regioes' => $regioes,
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
            'imagemProduto.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            /*'imagemProduto2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagemProduto3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagemProduto4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagemProduto5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',*/

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

        /*if ($request->hasFile('imagemProduto')) {
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
        }*/

        $imagemProduto = null;
        $imagemProduto2 = null;
        $imagemProduto3 = null;
        $imagemProduto4 = null;
        $imagemProduto5 = null;

        if ($request->hasFile('imagemProduto')) {
            $files = $request->file('imagemProduto');

            // Diretório onde as imagens serão salvas
            $uploadPath = 'images/produtos/';

            // Processa as imagens e salva o caminho no banco de dados
            foreach ($files as $index => $file) {
                $imageName = time() . '_' . ($index + 1) . '_' . $file->getClientOriginalName();
                $file->move(public_path($uploadPath), $imageName);

                // Atribui o caminho completo da imagem às variáveis
                if ($index == 0) {
                    $imagemProduto = $uploadPath . $imageName;  // Caminho completo
                } elseif ($index == 1) {
                    $imagemProduto2 = $uploadPath . $imageName; // Caminho completo
                } elseif ($index == 2) {
                    $imagemProduto3 = $uploadPath . $imageName; // Caminho completo
                } elseif ($index == 3) {
                    $imagemProduto4 = $uploadPath . $imageName; // Caminho completo
                } elseif ($index == 4) {
                    $imagemProduto5 = $uploadPath . $imageName; // Caminho completo
                }

                // Não processa mais de 5 imagens
                if ($index >= 4) {
                    break;
                }
            }
        }

        $produto->imagemProduto = $imagemProduto;
        $produto->imagemProduto2 = $imagemProduto2;
        $produto->imagemProduto3 = $imagemProduto3;
        $produto->imagemProduto4 = $imagemProduto4;
        $produto->imagemProduto5 = $imagemProduto5;

        $produto->save();

   
        return redirect()->route('produtosVendedor')->with('success', 'Cadastro efetuado com sucesso!');

    }

}
