<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    
    protected $table = 'tbVendedor';

    protected $primaryKey = 'idVendedor';

    public $incrementing = true;

 
    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'nomeVendedor', 'emailVendedor', 'senhaVendedor', 'telefoneVendedor', 'cepVendedor', 'logradouroVendedor', 'bairroVendedor', 'cidadeVendedor', 'estadoVendedor', 'complementoVendedor','imagemVendedor'
    ];
}
