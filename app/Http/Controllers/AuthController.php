<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
{
    // Validação dos dados de entrada
    $request->validate([
        'emailCliente' => 'required|email',
        'senhaCliente' => 'required',
    ]);

    // Busca o usuário na tabela tbCliente
    $usuario = DB::table('tbCliente')->where('emailCliente', $request->emailCliente)->first();

    Log::info('Usuário buscado na tabela Cliente', ['usuario' => $usuario]);

    // Se não encontrado, busca na tabela tbVendedor
    if (!$usuario) {
        $usuario = DB::table('tbVendedor')->where('emailVendedor', $request->emailCliente)->first();
        Log::info('Usuário buscado na tabela Vendedor', ['usuario' => $usuario]);
    }

    // Verifique se o usuário foi encontrado
    if ($usuario) {
        // Verifica se é um cliente ou vendedor e valida a senha
        $senhaCorreta = false;
        if (isset($usuario->senhaCliente)) { // Verifica se é cliente
            $senhaCorreta = Hash::check($request->senhaCliente, $usuario->senhaCliente);
        } elseif (isset($usuario->senhaVendedor) && !isset($usuario->senhaCliente) ) { // Verifica se é vendedor
            $senhaCorreta = Hash::check($request->senhaCliente, $usuario->senhaVendedor);
        }

        if ($senhaCorreta) {
             // Armazena se o usuário é vendedor (true) ou cliente (false)
            
             
             // Inicia a sessão para o usuário
            if (isset($usuario->idCliente)) { // Cliente
                Session::put('id', $usuario->idCliente);
                Session::put('nome', $usuario->nomeCliente);
                Session::put('email', $usuario->emailCliente);
                Session::put('numero', $usuario->numeroCliente);
                Session::put('logradouro', $usuario->logradouroCliente);
                Session::put('cep', $usuario->cepCliente);
                Session::put('cidade', $usuario->cidadeCliente);
                Session::put('estado', $usuario->estadoCliente);
                Session::put('imagemCliente', $usuario->imagemCliente);

                $isCliente = isset($usuario->idCliente);
                Session::put('is_Cliente', $isCliente);


            } elseif (isset($usuario->idVendedor)) { // Vendedor
                Session::put('id', $usuario->idVendedor);
                Session::put('nome', $usuario->nomeVendedor);
                Session::put('email', $usuario->emailVendedor);
                Session::put('numero', $usuario->numeroVendedor);
                Session::put('logradouro', $usuario->ruaVendedor);
                Session::put('cep', $usuario->cepVendedor);
                Session::put('cidade', $usuario->cidadeVendedor);
                Session::put('estado', $usuario->estadoVendedor);
                Session::put('imagem', $usuario->imagemVendedor);

                $isVendedor = isset($usuario->idVendedor);
                Session::put('is_vendedor', $isVendedor);
            }

            // Redireciona para o perfil
            return redirect('/');
        } else {
            Log::info('Senha incorreta', ['email' => $request->emailCliente]);
            return redirect()->back()->withErrors(['loginError' => 'Senha incorreta']);
        }
    } else {
        Log::info('E-mail não encontrado', ['email' => $request->emailCliente]);
        return redirect()->back()->withErrors(['loginError' => 'E-mail não encontrado']);
    }
}

    public function logout()
    {
        // Remove as informações da sessão
        Session::flush();

        // Redireciona para a página de login ou home
        return redirect('/');
    }
}

