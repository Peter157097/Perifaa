<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    public function store(Request $request)
    {

 
        $cliente = new Cliente;
        $cliente->nomeCliente = $request->nomeCliente;
        $cliente->emailCliente = $request->emailCliente;
        $cliente->numeroCliente = $request->numeroCliente;
        $cliente->cpfCliente = $request->cpfCliente;
        $cliente->cepCliente = $request->cepCliente;
        $cliente->logradouroCliente = $request->logradouroCliente;
        $cliente->bairroCliente = $request->bairroCliente;
        $cliente->cidadeCliente = $request->cidadeCliente;
        $cliente->estadoCliente = $request->estadoCliente;
        $cliente->complementoCliente = $request->complementoCliente;
        $cliente->senhaCliente = Hash::make($request->senhaCliente);

       
        $cliente->save();

       
        return redirect("/");
    }
    public function showProfile()
    {
        return view('perfil', [
            'nome' => Session::get('nome'),
            'email' => Session::get('email'),
            'numero' => Session::get('numero'),
            'logradouro' => Session::get('logradouro'),
            'cep' => Session::get('cep'),
            'cidade' => Session::get('cidade'),
            'estado' => Session::get('estado')
        ]);
    }

    public function update(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'nomeCliente' => 'required|string|max:255',
            'emailCliente' => 'required|email|max:255',
            'numeroCliente' => 'required|string|max:15',
            'logradouroCliente' => 'required|string|max:255',
            'cepCliente' => 'required|string|max:10',
            'cidadeCliente' => 'required|string|max:100',
            'estadoCliente' => 'required|string|max:50',
        ]);

        // Verifica se o idCliente está na sessão
        $idCliente = Session::get('id');
        if (!$idCliente) {
            return redirect('/perfil')->withErrors(['error' => 'ID do cliente não encontrado na sessão.']);
        }

        // Atualiza o cliente no banco de dados
        $cliente = Cliente::where('idCliente', $idCliente)->firstOrFail();
        $cliente->nomeCliente = $request->nomeCliente;
        $cliente->emailCliente = $request->emailCliente;
        $cliente->numeroCliente = $request->numeroCliente;
        $cliente->logradouroCliente = $request->logradouroCliente;
        $cliente->cepCliente = $request->cepCliente;
        $cliente->cidadeCliente = $request->cidadeCliente;
        $cliente->estadoCliente = $request->estadoCliente;
        $cliente->save();

        // Atualiza as informações na sessão
        Session::put('nome', $request->nomeCliente);
        Session::put('email', $request->emailCliente);
        Session::put('numero', $request->numeroCliente);
        Session::put('logradouro', $request->logradouroCliente);
        Session::put('cep', $request->cepCliente);
        Session::put('cidade', $request->cidadeCliente);
        Session::put('estado', $request->estadoCliente);

        session()->flash('success', 'Perfil atualizado com sucesso!');
        return redirect('/perfil');
    }
}