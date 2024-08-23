<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


      protected $table = 'tbCliente';

      protected $primaryKey = 'idCliente';
  
      public $incrementing = true;
  
   
      protected $keyType = 'int';
  
      public $timestamps = false;

    protected $fillable = [
        'nomeCliente', 'emailCliente', 'telefoneCliente', 'cepCliente', 'logradouroCliente', 'bairroCliente', 'cidadeCliente', 'estadoCliente', 'complementoCliente', 'senhaCliente',
    ];

}
