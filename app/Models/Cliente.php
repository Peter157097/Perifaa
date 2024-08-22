<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'Usuario'; // Certifique-se de que o nome da tabela está correto
    public $timestamps = false;

    protected $fillable = [
        'nomeCliente', 'emailCliente', 'telefoneCliente', 'cepCliente', 'logradouroCliente', 'bairroCliente', 'cidadeCliente', 'estadoCliente', 'complementoCliente', 'senhaCliente',
    ];
}
