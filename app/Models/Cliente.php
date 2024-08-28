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
    protected $fillable = [
        'nomeCliente',
        'emailCliente',
        'numeroCliente',
        'cpfCliente',
        'cepCliente',
        'logradouroCliente',
        'bairroCliente',
        'cidadeCliente',
        'estadoCliente',
        'complementoCliente',
        'senhaCliente',
        'imagemCliente',
        'numCasaCliente',
    ];
    public $timestamps = false; // Desative timestamps se não estiver usando

    public function favorites()
    {
        return $this->hasMany(Favorito::class, 'cliente_id', 'idCliente');
    }
}
