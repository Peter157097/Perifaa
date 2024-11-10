<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Venda;
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
        $cliente->numCasaCliente = $request->numCasaCliente;
        $cliente->senhaCliente = Hash::make($request->senhaCliente);

        $cliente->preferencia = in_array($request->preferencia, ['feminina', 'masculina'])
            ? $request->preferencia
            : 'feminina';

            if ($request->hasFile('imagemCliente')) {
                $file = $request->file('imagemCliente');
                $filename = time() . '.' . $file->getClientOriginalExtension();
            
                $file->move(public_path('images/perfil'), $filename);
                $cliente->imagemCliente = 'images/perfil/' . $filename;
            } else {
                $letras = range('a', 'z'); // Cria um array com letras de 'a' a 'z'
                $index = array_search(strtolower(substr($cliente->nomeCliente, 0, 1)), $letras); // Busca o índice da letra
            
                if ($index !== false) {
                    $cliente->imagemCliente = 'images/' . ($index + 1) . '.png'; // Adiciona 1 ao índice para o número do arquivo
                    Log::info('Imagem Cliente: ' . $cliente->imagemCliente);
                }
            }

        Log::info('Imagem Cliente: ' . $cliente->imagemCliente);
        $cliente->save();

        return redirect('/', )->with('success', 'Cliente cadastro com sucesso! Você pode fazer login agora.');
    }

    public function pedidos(Request $request)
    {
        $idCliente = Session::get('id'); // Verifique o valor do cliente_id
        $vendas = Venda::where('idCliente', $idCliente)->get();
        return view('pedidos', compact('vendas'));
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
            'estado' => Session::get('estado'),
            'imagemCliente' => Session::get('imagemCliente'),
            'numCasaCliente' => Session::get('numCasaCliente')
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
            'numCasaCliente' => 'required|string|max:50',
            'imagemCliente' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validação da imagem
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
        $cliente->numCasaCliente = $request->numCasaCliente;

        // Lidar com a imagem
        if ($request->hasFile('imagemCliente')) {
            $file = $request->file('imagemCliente');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/perfil'), $filename);
            $cliente->imagemCliente = 'images/perfil/' . $filename;
        }

        $cliente->save();
        Session::flash('editarCliente', 'Informações editadas com sucesso!');

        // Atualiza as informações na sessão
        Session::put('nome', $request->nomeCliente);
        Session::put('email', $request->emailCliente);
        Session::put('numero', $request->numeroCliente);
        Session::put('logradouro', $request->logradouroCliente);
        Session::put('cep', $request->cepCliente);
        Session::put('cidade', $request->cidadeCliente);
        Session::put('estado', $request->estadoCliente);
        Session::put('numCasaCliente', $request->numCasaCliente);

        if ($request->hasFile('imagemCliente')) {
            Session::put('imagemCliente', $cliente->imagemCliente);
        }

        session()->flash('success', 'Perfil atualizado com sucesso!');
        return redirect('/perfil');
    }
}
