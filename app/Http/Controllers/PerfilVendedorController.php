<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Produto;

class PerfilVendedorController extends Controller
{
    public function vendas()
{
    return view('vendas'); // Certifique-se que a view 'vendas.blade.php' existe
}

public function vendidos()
{
    return view('vendidos'); // Certifique-se que a view 'vendidos.blade.php' existe
}

public function show($idVendedor)
{
    // Obtém o vendedor pelo ID
    $vendedor = Vendedor::find($idVendedor);

    // Verifica se o vendedor foi encontrado
    if (!$vendedor) {
        abort(404);
    }

    // Busca todos os produtos relacionados a esse vendedor
    $produtos = Produto::where('idVendedor', $idVendedor)->get();

    // Passa os dados do vendedor e dos produtos para a view
    return view('perfilVendedor', compact('vendedor', 'produtos'));
}


}

