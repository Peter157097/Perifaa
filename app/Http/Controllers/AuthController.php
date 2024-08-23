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

        // Busca o usuário pelo email
        $usuario = DB::table('tbCliente')->where('emailCliente', $request->emailCliente)->first();

        Log::info('Usuário buscado', ['usuario' => $usuario]);

        // Verifique se o usuário foi encontrado
        if ($usuario) {
            // Verifica se a senha está correta
            if ($usuario && Hash::check($request->senhaCliente, $usuario->senhaCliente)) {
                // Inicia a sessão para o usuário
                Session::put('id', $usuario->idCliente);
                Session::put('nome', $usuario->nomeCliente);
                Session::put('email', $usuario->emailCliente);
                Session::put('numero', $usuario->numeroCliente);
                Session::put('logradouro', $usuario->logradouroCliente);
                Session::put('cep', $usuario->cepCliente);
                Session::put('cidade', $usuario->cidadeCliente);
                Session::put('estado', $usuario->estadoCliente);

                Session::put('imagemCliente', $usuario->imagemCliente);


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

