<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Contato;
use Stripe\Stripe;
use Stripe\PaymentIntent;

use Illuminate\Support\Facades\Storage;

class LivroController extends Controller
{
    public function index()
    {
        $livrosQuery = Livro::query();
        $livrosQuery->orderBy('title', 'asc');
        $livros = $livrosQuery->paginate(8);
        return view('catalogo', ['livros' => $livros]);
    }

    public function detalhes($id)
    {
        $livro = Livro::findOrFail($id);
        return view('detalhes', ['livro' => $livro]);
    }
    
    public function dashbordContato()
    {
        $contatos = Contato::all();
        return view('dashbordContato', ['contatos' => $contatos]);
    }

    public function destroyContato($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();

        session()->flash('success', 'Contato deletado com sucesso!');
        return redirect('/dashbordContato');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'Autor' => 'required',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $livro = new Livro();
        $livro->title = $request->title;
        $livro->Autor = $request->Autor;
        $livro->descricao = $request->descricao;
        $livro->valor = $request->valor;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/livros'), $imageName);
            $livro->image = 'images/livros/' . $imageName;
        }

        $livro->save();

        return redirect('/admin');
    }

    public function dashbord()
    {
        $livros = Livro::all();
        return view('dashbord', ['livros' => $livros]);
    }

    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);

        // Remover a imagem antiga se existir
        if ($livro->image && file_exists(public_path($livro->image))) {
            unlink(public_path($livro->image));
        }

        $livro->delete();
        session()->flash('success', 'Livro deletado com sucesso!!');
        return redirect('/dashbord');
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('editar', ['livro' => $livro]);
    }
   

    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);

        // Validação dos dados
        $request->validate([
            'title' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'Autor' => 'required|string|max:255',
            'descricao' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Atualização dos outros campos
        $livro->title = $request->input('title');
        $livro->valor = $request->input('valor');
        $livro->Autor = $request->input('Autor');
        $livro->descricao = $request->input('descricao');

        // Lógica de upload da imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remover a imagem antiga se existir
            if ($livro->image && file_exists(public_path($livro->image))) {
                unlink(public_path($livro->image));
            }

            // Armazenar a nova imagem
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/livros'), $imageName);
            $livro->image = 'images/livros/' . $imageName;
        }

        $livro->save();

        session()->flash('success', 'Livro atualizado com sucesso!!');
        return redirect('/catalogo');
    }
    
}

?>