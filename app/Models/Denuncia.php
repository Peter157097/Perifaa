<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    
    protected $table = 'tbDenuncia'; // Nome da tabela
    protected $primaryKey = 'idDenuncia'; // Nome da coluna que é a chave primária
    public $incrementing = false; // Defina como false se 'idDenuncia' não for auto-incrementada
    protected $keyType = 'string'; // Ajuste o tipo da chave, se necessário
    public $timestamps = false; // Desabilita timestamps

        protected $fillable = [
        'tipoDenuncia',
        'descDenuncia',
        'dataDenuncia',
        'idProduto',
        'idCliente',
    ];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente');
    }
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'idProduto');
    }
}




