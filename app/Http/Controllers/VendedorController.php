<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use Illuminate\Support\Facades\Hash;

class VendedorController extends Controller
{
    public function store(Request $request)
    {
        $vendedor = new Vendedor;
        $vendedor->nomeVendedor = $request->nomeVendedor;
        $vendedor->emailVendedor = $request->emailVendedor;
        $vendedor->telefoneVendedor = $request->telefoneVendedor;
        $vendedor->cepVendedor = $request->cepVendedor;
        $vendedor->ruaVendedor = $request->ruaVendedor;
        $vendedor->bairroVendedor = $request->bairroVendedor;
        $vendedor->cidadeVendedor = $request->cidadeVendedor;
        $vendedor->estadoVendedor = $request->estadoVendedor;
        $vendedor->complementoVendedor = $request->complementoVendedor;
        $vendedor->senhaVendedor = Hash::make($request->senhaVendedor);

        // Verifica se o arquivo foi enviado
        if ($request->hasFile('imagemVendedor')) {
            $file = $request->file('imagemVendedor');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Move o arquivo para o diretório public/images/perfil
            $file->move(public_path('images/perfil'), $filename);
            $vendedor->imagemVendedor = 'images/perfil/' . $filename; // Caminho relativo
        } else {
            $vendedor->imagemVendedor = 'images/logo3.png'; // Define como null se a imagem não for fornecida
        }

        $vendedor->save();
        return redirect("/");
    }
}
