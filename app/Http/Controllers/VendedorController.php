<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class VendedorController extends Controller
{
    public function store(Request $request)
    {
        $vendedor = new Vendedor;
        $vendedor->nomeVendedor = $request->nomeVendedor;
        $vendedor->emailVendedor = $request->emailVendedor;
        $vendedor->numeroVendedor = $request->numeroVendedor;
        $vendedor->cpfVendedor = $request->cpfVendedor;
        $vendedor->cepVendedor = $request->cepVendedor;
        $vendedor->logradouroVendedor = $request->logradouroVendedor;
        $vendedor->bairroVendedor = $request->bairroVendedor;
        $vendedor->cidadeVendedor = $request->cidadeVendedor;
        $vendedor->estadoVendedor = $request->estadoVendedor;
        $vendedor->complementoVendedor = $request->complementoVendedor;
        $vendedor->numCasaVendedor = $request->numCasaVendedor;
        $vendedor->senhaVendedor = Hash::make($request->senhaVendedor);

        // Verifica se o arquivo foi enviado
        if ($request->hasFile('imagemVendedor')) {
            $file = $request->file('imagemVendedor');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Move o arquivo para o diretório public/images/perfil
            $file->move(public_path('images/perfil'), $filename);
            $vendedor->imagemVendedor = 'images/perfil/' . $filename; // Caminho relativo
        } else {
            $vendedor->imagemVendedor = 'images/logo3.jpeg'; 
        }

        $vendedor->save();

        
        Session::flash('cadastrarVendedor', 'Vendedor cadastrado com sucesso!');

        return redirect("/");
    }

    public function showProfile()
    {
        return view('perfil', [
            'nomeVendedor' => Session::get('nomeVendedor'),
            'emailVendedor' => Session::get('emailVendedor'),
            'numeroVendedor' => Session::get('numeroVendedor'),
            'logradouroVendedor' => Session::get('logradouroVendedor'),
            'cepVendedor' => Session::get('cepVendedor'),
            'cidadeVendedor' => Session::get('cidadeVendedor'),
            'estadoVendedor' => Session::get('estadoVendedor'),
            'imagemVendedor' => Session::get('imagemVendedor'),
            'numCasaVendedor' => Session::get('numCasaVendedor')
        ]);
    }

    public function update(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'nomeVendedor' => 'required|string|max:255',
            'emailVendedor' => 'required|email|max:255',
            'numeroVendedor' => 'required|string|max:15',
            'logradouroVendedor' => 'required|string|max:255',
            'cepVendedor' => 'required|string|max:10',
            'cidadeVendedor' => 'required|string|max:100',
            'estadoVendedor' => 'required|string|max:50',
            'numCasaVendedor' => 'required|string|max:50',
            'imagemVendedor' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $idVendedor = Session::get('idVendedor');
        if (!$idVendedor) {
            return redirect('/editarPerfilVendedor')->withErrors(['error' => 'ID do vendedor não encontrado na sessão.']);
        }

        $vendedor = Vendedor::where('idVendedor', $idVendedor)->firstOrFail();
        $vendedor->nomeVendedor = $request->nomeVendedor;
        $vendedor->emailVendedor = $request->emailVendedor;
        $vendedor->numeroVendedor = $request->numeroVendedor;
        $vendedor->logradouroVendedor = $request->logradouroVendedor;
        $vendedor->cepVendedor = $request->cepVendedor;
        $vendedor->cidadeVendedor = $request->cidadeVendedor;
        $vendedor->estadoVendedor = $request->estadoVendedor;
        $vendedor->numCasaVendedor = $request->numCasaVendedor;

        // Lidar com a imagem
        if ($request->hasFile('imagemVendedor')) {
            $file = $request->file('imagemVendedor');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/perfil'), $filename);
            $vendedor->imagemVendedor = 'images/perfil/' . $filename;
        }

        $vendedor->save();

        Session::flash('editarVendedor', 'Informações editadas com sucesso!');

        // Atualiza as informações na sessão
        Session::put('nomeVendedor', $request->nomeVendedor);
        Session::put('emailVendedor', $request->emailVendedor);
        Session::put('numeroVendedor', $request->numeroVendedor);
        Session::put('cepVendedor', $request->cepVendedor);
        Session::put('logradouroVendedor', $request->logradouroVendedor);
        Session::put('cidadeVendedor', $request->cidadeVendedor);
        Session::put('estadoVendedor', $request->estadoVendedor);
        Session::put('numCasaVendedor', $request->numCasaVendedor);
        if ($request->hasFile('imagemVendedor')) {
            Session::put('imagemVendedor', 'images/perfil/' . $filename);
        }

        return redirect('/editarPerfilVendedor')->with('success', 'Perfil atualizado com sucesso!');
    }


}
