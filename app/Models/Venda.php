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
        'idVendedor',
        'idItensVenda',
        'numCasaCliente',
        'numCasaVendedor',
        'idPagamento',
        'idLoc',
        'codigoCorreio',
    ];

    public $timestamps = false;

    // Relacionamento com a tabela de Cores
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente', 'idCliente');
    }
    public function primeiroItemVenda()
    {
        return $this->itensvenda()->first();
    }

    // Relacionamento com a tabela de Condições
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'idVendedor', 'idVendedor');
    }
    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class, 'idPagamento', 'idPagamento');
    }
    public function itensvenda()
    {
        return $this->belongsTo(ItensVenda::class, 'idItensVenda', 'idItensVenda');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'idProduto'); // Use o nome da coluna de chave estrangeira em `tbvenda`
    }


}
