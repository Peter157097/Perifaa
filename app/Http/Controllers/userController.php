<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mostrarTelaFiltro()
{
    // Carregar todos os usuários inicialmente
    $usuarios = DB::table('tbCliente')
                  ->select('nomeCliente as nome', 'emailCliente as email', 'imagemCliente as imagem', DB::raw('"cliente" as tipo'))
                  ->get()
                  ->merge(
                      DB::table('tbVendedor')
                      ->select('nomeVendedor as nome', 'emailVendedor as email', 'imagemVendedor as imagem', DB::raw('"vendedor" as tipo'))
                      ->get()
                  )
                  ->merge(
                      DB::table('tbAdministrador')
                      ->select('nomeAdministrador as nome', 'emailAdministrador as email', 'imagemAdministrador as imagem', DB::raw('"administrador" as tipo'))
                      ->get()
                  );

    return view('filtro-usuarios', ['usuarios' => $usuarios, 'tipoSelecionado' => 'todos']);
}

public function filtrarUsuarios(Request $request)
{
    $tipo = $request->input('tipo');
    $nome = $request->input('nome');

    $usuarios = [];

    if ($tipo === 'todos') {
        $clientes = DB::table('tbCliente')
                      ->where('nomeCliente', 'like', '%' . $nome . '%')
                      ->select('nomeCliente as nome', 'emailCliente as email', 'imagemCliente as imagem', DB::raw('"cliente" as tipo'))
                      ->get();
        $vendedores = DB::table('tbVendedor')
                        ->where('nomeVendedor', 'like', '%' . $nome . '%')
                        ->select('nomeVendedor as nome', 'emailVendedor as email', 'imagemVendedor as imagem', DB::raw('"vendedor" as tipo'))
                        ->get();
        $administradores = DB::table('tbAdministrador')
                            ->where('nomeAdministrador', 'like', '%' . $nome . '%')
                            ->select('nomeAdministrador as nome', 'emailAdministrador as email', 'imagemAdministrador as imagem', DB::raw('"administrador" as tipo'))
                            ->get();

        $usuarios = $clientes->merge($vendedores)->merge($administradores);
    } elseif ($tipo === 'cliente') {
        $usuarios = DB::table('tbCliente')
                      ->where('nomeCliente', 'like', '%' . $nome . '%')
                      ->select('nomeCliente as nome', 'emailCliente as email', 'imagemCliente as imagem', DB::raw('"cliente" as tipo'))
                      ->get();
    } elseif ($tipo === 'vendedor') {
        $usuarios = DB::table('tbVendedor')
                      ->where('nomeVendedor', 'like', '%' . $nome . '%')
                      ->select('nomeVendedor as nome', 'emailVendedor as email', 'imagemVendedor as imagem', DB::raw('"vendedor" as tipo'))
                      ->get();
    } elseif ($tipo === 'administrador') {
        $usuarios = DB::table('tbAdministrador')
                      ->where('nomeAdministrador', 'like', '%' . $nome . '%')
                      ->select('nomeAdministrador as nome', 'emailAdministrador as email', 'imagemAdministrador as imagem', DB::raw('"administrador" as tipo'))
                      ->get();
    }

    return view('filtro-usuarios', ['usuarios' => $usuarios, 'tipoSelecionado' => $tipo]);
}

}
