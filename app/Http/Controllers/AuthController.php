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
        // Se ainda não encontrado, busca na tabela tbAdmin
        if (!$usuario) {
            $usuario = DB::table('tbAdministrador')->where('emailAdministrador', $request->emailCliente)->first();
            Log::info('Usuário buscado na tabela Admin', ['usuario' => $usuario]);
        }

        // Verifique se o usuário foi encontrado
        if ($usuario) {
            // Verifica se é um cliente ou vendedor e valida a senha
            $senhaCorreta = false;
            if (isset($usuario->senhaCliente)) { // Verifica se é cliente
                $senhaCorreta = Hash::check($request->senhaCliente, $usuario->senhaCliente);
            } elseif (isset($usuario->senhaVendedor) && !isset($usuario->senhaCliente)) { // Verifica se é vendedor
                $senhaCorreta = Hash::check($request->senhaCliente, $usuario->senhaVendedor);
            } elseif (isset($usuario->senhaAdministrador)) { // Verifica se é administrador
                $senhaCorreta = Hash::check($request->senhaCliente, $usuario->senhaAdministrador);
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
                    Session::put('numCasaCliente', $usuario->numCasaCliente);
                    Session::put('imagemCliente', $usuario->imagemCliente);

                    $isCliente = isset($usuario->idCliente);
                    Session::put('is_Cliente', $isCliente);
                    return redirect('/');


                } elseif (isset($usuario->idVendedor)) { // Vendedor
                    Session::put('idVendedor', $usuario->idVendedor);
                    Session::put('nomeVendedor', $usuario->nomeVendedor);
                    Session::put('emailVendedor', $usuario->emailVendedor);
                    Session::put('numeroVendedor', $usuario->numeroVendedor);
                    Session::put('logradouroVendedor', $usuario->logradouroVendedor);
                    Session::put('cepVendedor', $usuario->cepVendedor);
                    Session::put('cidadeVendedor', $usuario->cidadeVendedor);
                    Session::put('estadoVendedor', $usuario->estadoVendedor);
                    Session::put('numCasaVendedor', $usuario->numCasaVendedor);
                    Session::put('imagemVendedor', $usuario->imagemVendedor);

                    $isVendedor = isset($usuario->idVendedor);
                    Session::put('is_vendedor', $isVendedor);
                    return redirect('/');

                } elseif (isset($usuario->idAdministrador)) { // Admin
                    Session::put('idAdmin', $usuario->idAdministrador);
                    Session::put('emailAdmin', $usuario->emailAdministrador);
                    // Adicione outras informações do admin conforme necessário
                    Session::put('is_admin', true);
                    $isAdmin = isset($usuario->idAdmin);
                    return redirect('/adminDenuncias');
                }


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

