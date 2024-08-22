<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function create()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required',
            'sobre' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required',
        ]);

        $contato = new Contato();
        $contato->nome = $request->nome;
        $contato->sobre = $request->sobre;
        $contato->email = $request->email;
        $contato->assunto = $request->assunto;
        $contato->mensagem = $request->mensagem;
        $contato->save();

        return redirect('/contato')->with('success', 'Mensagem enviada com sucesso!');
    }

    public function admin()
    {
        $contatos = Contato::all();
        return view('admin', ['contatos' => $contatos]);
    }
}
