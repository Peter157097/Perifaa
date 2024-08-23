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

       
        $vendedor->save();

       
        return redirect("/");
    }
}
