<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Denuncia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DenunciaController extends Controller
{
    public function store(Request $request)
    {
        $Denuncia = new Denuncia;
        $Denuncia->tipoDenuncia = $request->tipoDenuncia;
        $Denuncia->descDenuncia = $request->descDenuncia;
        $Denuncia->dataDenuncia = $request->dataDenuncia;
        $Denuncia->idProduto = $request->idProduto;
        $Denuncia->idCliente = $request->idCliente;

        $Denuncia->save();
        
        Session::flash('cadastrarDenuncia', 'Denuncia enviada com sucesso!');

        return redirect()->back()->with('sucess', 'Denuncia cadastrada com sucesso!');
    }
    public function destroy($idDenuncia)
{
    $denuncia = Denuncia::find($idDenuncia);
    
    if ($denuncia) {
        $denuncia->delete();
        return redirect()->back()->with('message', 'Denúncia excluída com sucesso!');
    } else {
        return redirect()->back()->with('error', 'Denúncia não encontrada.');
    }
}
}
