<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function obterDados() {
        $vendedores = DB::table('tbVendedor')
                        ->select(DB::raw("DATE_FORMAT(dataCriacao, '%b') as mes"), DB::raw('COUNT(*) as total'))
                        ->groupBy('mes')
                        ->orderByRaw("FIELD(mes, 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec')")
                        ->get();
    
        $clientes = DB::table('tbCliente')
                      ->select(DB::raw("DATE_FORMAT(dataCriacao, '%b') as mes"), DB::raw('COUNT(*) as total'))
                      ->groupBy('mes')
                      ->orderByRaw("FIELD(mes, 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec')")
                      ->get();
    
        return response()->json([
            'vendedores' => $vendedores,
            'clientes' => $clientes,
        ]);
    }
    public function getVendasPorCategoria()
{
    $dados = DB::table('tbvenda')
        ->join('tbproduto', 'tbvenda.idProduto', '=', 'tbproduto.idProduto')
        ->join('tbcategoriaproduto', 'tbproduto.idCategoriaProduto', '=', 'tbcategoriaproduto.idCategoriaProduto')
        ->select('tbcategoriaproduto.nomeCategoriaProduto as categoria', DB::raw('COUNT(tbvenda.idVenda) as vendas'))
        ->groupBy('tbcategoriaproduto.nomeCategoriaProduto')
        ->orderBy('vendas', 'DESC')
        ->get();

    return response()->json($dados);
}
    
}
