<?php

namespace App\Http\Controllers;
use App\Models\Admin2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public  function Store(Request $request)
    {
        $admin = new Admin2();
        
        $admin->nomeAdministrador = $request->nome;
        $admin->emailadministrador = $request->email;
        $admin->senhaAdministrador = Hash::make($request->senha);
        $admin->imagemAdministrador = "images/adm.png";
        $admin->save();

    }
}
