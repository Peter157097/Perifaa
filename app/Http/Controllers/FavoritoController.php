<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Favorito;
use Illuminate\Support\Facades\Session;

class FavoritoController extends Controller
{
    public function toggleFavorite(Request $request)
    {
        $clientId = Session::get('id'); // Pega o ID do cliente logado
        $productId = $request->input('product_id');

        // Verifica se o produto já está nos favoritos
        $favorite = Favorito::where('idProduto', $productId)
                            ->where('idCliente', $clientId)
                            ->first();

        if ($favorite) {
            // Se estiver favoritado, remove
            $favorite->delete();
            return redirect()->back()->with('success', 'Produto removido dos favoritos!');
        } else {
            // Se não estiver favoritado, adiciona
            Favorito::create([
                'idProduto' => $productId,
                'idCliente' => $clientId,
            ]);
            return redirect()->back()->with('success', 'Produto adicionado aos favoritos!');
        }
    }
    

    // Adiciona um produto aos favoritos
    public function addFavorite(Request $request)
    {
        // Obtém o ID do cliente logado da sessão
        $clientId = Session::get('id'); 
    
        $request->validate([
            'product_id' => 'required|exists:tbproduto,idProduto',
        ]);
    
        Favorito::updateOrCreate(
            [
                'idCliente' => $clientId,
                'idProduto' => $request->product_id,
            ]
        );
    
        return back()->with('success', 'Produto adicionado aos favoritos!');
    }

    // Remove um produto dos favoritos
    public function removeFavorite(Request $request)
    {
        // Obtém o ID do cliente logado da sessão
        $clientId = Session::get('id'); 

        $request->validate([
            'product_id' => 'required|exists:prd,id',
        ]);

        $favorite = Favorito::where('idProduto', $request->product_id)
                       ->where('idCliente', $clientId)
                       ->first();

        if ($favorite) {
            $favorite->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }


  // Lista todos os favoritos para o cliente fixo
  public function index2()
  {
      // Obtém o ID do cliente logado da sessão
      $clientId = Session::get('id'); 

      $favorites = Favorito::where('idCliente', $clientId)
                    ->with(['product'])
                    ->get();

      return view('favorites', compact('favorites'));
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
      Favorito::updateOrCreate(
          [
              'idProduto' => $request->idProduto,
              'idCliente' => $clientId,
          ]
      );

      return redirect()->route('favorites.index')->with('success', 'Produto adicionado aos favoritos!');
  }

  // Remove um favorito
  public function destroy($productId)
  {
      // Obtém o ID do cliente logado da sessão
      $clientId = Session::get('id'); 
  
      // Encontra o favorito usando as colunas corretas
      $favorite = Favorito::where('idProduto', $productId)
                          ->where('idCliente', $clientId)
                          ->first();
  
      if ($favorite) {
          // Deleta o favorito encontrado
          $favorite->delete();
          return redirect()->route('favorites.index')->with('success');
      }
  
      return redirect()->route('favorites.index')->with('error');
  }
  
  
  
}
