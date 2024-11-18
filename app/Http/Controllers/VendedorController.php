<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Produto;
use App\Models\Cor;
use App\Models\Tamanho;
use App\Models\Categoria;
use App\Models\Genero;
use App\Models\Regiao;
use App\Models\Venda;
use App\Models\Pagamento;
use App\Models\Condicao;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class VendedorController extends Controller
{

    public function index()
    {
        $idVendedor = Session::get('idVendedor');


        $vendedor = Vendedor::find($idVendedor);


        // Recupera todas as vendas do vendedor logado
        $vendas = Venda::where('idVendedor', $idVendedor)->get();
        

        return view('dashboardVendedor', [
            'vendedor' => $vendedor,
            'vendas' => $vendas
        ]);
    }


    public function atualizarCodigoCorreios(Request $request, $id)
    {
        // Validação do campo
        $request->validate([
            'codigoCorreios' => 'required|string',
        ]);

        // Atualização do campo no banco de dados
        $venda = Venda::findOrFail($id);
        $venda->codigoCorreio = $request->codigoCorreios;
        $venda->idLoc = 1;
        $venda->save();

        return redirect()->route('dashboardVendedor')->with('success', 'Código dos Correios atualizado com sucesso.');
    }



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


        if ($request->hasFile('imagemVendedor')) {
            $file = $request->file('imagemVendedor');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('images/perfil'), $filename);
            $vendedor->imagemVendedor = 'images/perfil/' . $filename;
        } else {
            $letras = range('a', 'z'); // Cria um array com letras de 'a' a 'z'
            $index = array_search(strtolower(substr($vendedor->nomeVendedor, 0, 1)), $letras); // Busca o índice da letra

            if ($index !== false) {
                $vendedor->imagemVendedor = 'images/' . ($index + 1) . '.png'; // Adiciona 1 ao índice para o número do arquivo
                Log::info('Imagem Cliente: ' . $vendedor->imagemVendedor);
            }
        }

        Log::info('Imagem Cliente: ' . $vendedor->imagemCliente);



        $vendedor->save();


        return redirect('/', )->with('success', 'Vendedor cadastro com sucesso! Você pode fazer login agora.');


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
            'numCasaVendedor' => Session::get('numCasaVendedor'),

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
