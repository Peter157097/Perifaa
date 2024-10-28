<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentralAjudaController extends Controller
{
    public function index()
    {
        return view('centralAjuda');
    }

    public function entrar(Request $request)
    {
        // Obter a categoria clicada
        $categoria = $request->query('categoria');
        return view('centralAjuda-entrar', compact('categoria'));
    }
}
