<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mostrarTelaFiltro()
{
    $usuarios = DB::table('tbCliente')
                  ->select('idCliente as id', 'nomeCliente as nome', 'emailCliente as email', 'imagemCliente as imagem', DB::raw('"cliente" as tipo'))
                  ->get()
                  ->merge(
                      DB::table('tbVendedor')
                      ->select('idVendedor as id', 'nomeVendedor as nome', 'emailVendedor as email', 'imagemVendedor as imagem', DB::raw('"vendedor" as tipo'))
                      ->get()
                  )
                  ->merge(
                      DB::table('tbAdministrador')
                      ->select('idAdministrador as id', 'nomeAdministrador as nome', 'emailAdministrador as email', 'imagemAdministrador as imagem', DB::raw('"administrador" as tipo'))
                      ->get()
                  );

    return view('filtro-usuarios', [
        'usuarios' => $usuarios,
        'tipoSelecionado' => 'todos',
    ]);
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

    return response()->json($usuarios);
}

public function pesquisarUsuarios(Request $request)
{
    $tipo = $request->input('tipo');
    $nome = $request->input('nome');

    $usuarios = [];

    if ($tipo === 'todos') {
        $usuarios = $this->carregarUsuarios()->filter(function($usuario) use ($nome) {
            return str_contains(strtolower($usuario->nome), strtolower($nome));
        })->values();
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

    return response()->json($usuarios);
}
public function excluirUsuario(Request $request)
{
    $tipo = $request->input('tipo');
    $id = $request->input('id');

    try {
        if ($tipo === 'cliente') {
            DB::table('tbCliente')->where('idCliente', $id)->delete();
        } elseif ($tipo === 'vendedor') {
            DB::table('tbVendedor')->where('idVendedor', $id)->delete();
        } elseif ($tipo === 'administrador') {
            DB::table('tbAdministrador')->where('idAdministrador', $id)->delete();
        }

        return response()->json(['success' => true, 'message' => 'Usuário excluído com sucesso.']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Erro ao excluir usuário.']);
    }
}


}
