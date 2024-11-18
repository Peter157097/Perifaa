<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'tbvenda';  // Nome da tabela no banco de dados
    protected $primaryKey = 'idVenda'; // Chave primária da tabela

    protected $fillable = [
        'dataVenda',
        'valorTotalVenda',
        'idCliente',
        'nomeCartao',
        'cpfCartao',
        'numeroCartao',
        'validadeCartao',
        'cvcCartao',
        'idVendedor',
        'logradouroEntrega',
        'numCasaEntrega',
        'idProduto',
        'idLoc',
        'codigoCorreio',
    ];

    public $timestamps = false;

    // Relacionamento com a tabela de Cores
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente', 'idCliente');
    }

    // Relacionamento com a tabela de Condições
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'idVendedor', 'idVendedor');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'idProduto'); // Use o nome da coluna de chave estrangeira em `tbvenda`
    }


}
