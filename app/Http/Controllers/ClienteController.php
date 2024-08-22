<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $cliente = new Cliente;
    
        $cliente->nomeCliente = $request->nomeCliente;
        $cliente->emailCliente = $request->emailCliente; 
        $cliente->telefoneCliente = $request->telefoneCliente;
        $cliente->cepCliente = $request->cepCliente;
        $cliente->logradouroCliente = $request->logradouroCliente;
        $cliente->bairroCliente = $request->bairroCliente;
        $cliente->cidadeCliente = $request->cidadeCliente;
        $cliente->estadoCliente = $request->estadoCliente;
        $cliente->complementoCliente = $request->complementoCliente;
        $cliente->senhaCliente = $request->senhaCliente;
        
        $cliente->save();

        return redirect("/");
    } 
}
