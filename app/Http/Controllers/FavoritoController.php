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
    
    public function addFavorite(Request $request)
    {
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

    public function removeFavorite(Request $request)
    {
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

    public function index2()
    {
        $clientId = Session::get('id'); 

        $favorites = Favorito::where('idCliente', $clientId)
                    ->with(['product'])
                    ->get();

        return view('favorites', compact('favorites'));
    }

    public function store(Request $request)
    {
        $clientId = Session::get('id'); 

        $request->validate([
            'idProduto' => 'required|exists:prd,id',
        ]);

        Favorito::updateOrCreate(
            [
                'idProduto' => $request->idProduto,
                'idCliente' => $clientId,
            ]
        );

        return redirect()->route('favorites.index')->with('success', 'Produto adicionado aos favoritos!');
    }

    public function destroy($productId)
    {
        $clientId = Session::get('id'); 
  
        $favorite = Favorito::where('idProduto', $productId)
                          ->where('idCliente', $clientId)
                          ->first();
  
        if ($favorite) {
            $favorite->delete();
            return redirect()->route('favorites.index')->with('success', 'Produto removido dos favoritos!');
        }
  
        return redirect()->route('favorites.index')->with('error', 'Erro ao remover o produto dos favoritos.');
    }
}
