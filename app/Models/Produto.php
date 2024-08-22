<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'tbproduto';  // Nome da tabela no banco de dados
    protected $primaryKey = 'idProduto'; // Chave primária da tabela

    // Defina quais campos podem ser preenchidos
    protected $fillable = [
        'nomeProduto',
        'idTamanho',
        'valorProduto',
        'descricaoProduto',
        'idCor',
        'idCondicao',
        'idCategoria',
        'idGenero',
        'idRegiao',
        'imagemProduto',
        'idVendedor',
    ];

    // Se a tabela usa timestamps, defina como false
    public $timestamps = false;
}
