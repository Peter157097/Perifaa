<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $table = 'tbfavorito';

    protected $primaryKey = 'idFavorito';

    public $timestamps = false;

    protected $fillable = ['idCliente', 'idProduto'];
    
    public function product()
    {
        return $this->belongsTo(Produto::class, 'idProduto');
    }

    public function client()
    {
        return $this->belongsTo(Cliente::class, 'idCliente');
    }
}
