<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carrinho;
use Illuminate\Support\Facades\Session;

class CarrinhoController extends Controller
{
    public function toggleCarrinho(Request $request)
    {
        $clientId = Session::get('id'); // Pega o ID do cliente logado
        $productId = $request->input('product_id');

        // Verifica se o produto já está nos favoritos
        $carrinho = Carrinho::where('idProduto', $productId)
                            ->where('idCliente', $clientId)
                            ->first();

        if ($carrinho) {
            // Se estiver favoritado, remove
            $carrinho->delete();
            return redirect()->back()->with('success', 'Produto removido do Carrinho!');
        } else {
            // Se não estiver favoritado, adiciona
            Carrinho::create([
                'idProduto' => $productId,
                'idCliente' => $clientId,
            ]);
            return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');
        }
    }
    

    // Adiciona um produto aos favoritos
    public function addCarrinho(Request $request)
    {
        // Obtém o ID do cliente logado da sessão
        $clientId = Session::get('id'); 
    
        $request->validate([
            'product_id' => 'required|exists:tbproduto,idProduto',
        ]);
    
        Carrinho::updateOrCreate(
            [
                'idCliente' => $clientId,
                'idProduto' => $request->product_id,
            ]
        );
    
        return back()->with('success', 'Produto adicionado ao carrinho!');
    }

    // Remove um produto dos favoritos
    public function removeCarrinho(Request $request)
    {
        // Obtém o ID do cliente logado da sessão
        $clientId = Session::get('id'); 

        $request->validate([
            'product_id' => 'required|exists:prd,id',
        ]);

        $carrinho = Carrinho::where('idProduto', $request->product_id)
                       ->where('idCliente', $clientId)
                       ->first();

        if ($carrinho) {
            $carrinho->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }


  // Lista todos os favoritos para o cliente fixo
  public function index2()
  {
      // Obtém o ID do cliente logado da sessão
      $clientId = Session::get('id'); 

      $carrinho = Carrinho::where('idCliente', $clientId)
                    ->with(['product'])
                    ->get();

      return view('carrinho', compact('carrinho'));
  }

  

  // Adiciona um novo favorito
  public function store(Request $request)
  {
      // Obtém o ID do cliente logado da sessão
      $clientId = Session::get('id'); 

      $request->validate([
          'idProduto' => 'required|exists:prd,id',
      ]);

      // Adiciona o favorito
      Carrinho::updateOrCreate(
          [
              'idProduto' => $request->idProduto,
              'idCliente' => $clientId,
          ]
      );

      return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho!');
  }

  // Remove um favorito
  public function destroy($productId)
  {
      // Obtém o ID do cliente logado da sessão
      $clientId = Session::get('id'); 
      
      // Encontra o favorito usando as colunas corretas
      $carrinho = Carrinho::where('idProduto', $productId)
                          ->where('idCliente', $clientId)
                          ->first();
  
      if ($carrinho) {
          // Deleta o favorito encontrado
          $carrinho->delete();
          return redirect()->route('carrinho.index')->with('success');
      }
  
      return redirect()->route('carrinho.index')->with('error');
  }
}
