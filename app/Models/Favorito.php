<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $table = 'tbfavorito';

    protected $primaryKey = 'idFavorito';

    // Desativa o gerenciamento automático de timestamps
    public $timestamps = false;

    // Define os atributos que podem ser preenchidos em massa
    protected $fillable = ['idCliente', 'idProduto'];
    
    // Define o relacionamento com o modelo Post
    public function product()
    {
        return $this->belongsTo(Produto::class, 'idProduto');
    }

    // Define o relacionamento com o modelo Cliente
    public function client()
    {
        return $this->belongsTo(Cliente::class, 'idCliente');
    }
}
