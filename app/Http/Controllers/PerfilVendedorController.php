<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilVendedorController extends Controller
{
    public function vendas()
{
    return view('vendas'); // Certifique-se que a view 'vendas.blade.php' existe
}

public function vendidos()
{
    return view('vendidos'); // Certifique-se que a view 'vendidos.blade.php' existe
}

}

