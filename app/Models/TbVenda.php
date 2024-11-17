<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbVenda extends Model
{
    use HasFactory;

    protected $table = 'tbvenda';

    protected $primaryKey = 'idVenda';

    public $timestamps = false;

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
        'metodoPagamento',
        'idProduto',
    ];
    

    protected $casts = [
        'valorTotalVenda' => 'decimal:2',
        'dataVenda' => 'datetime',
        'numCasaEntrega' => 'integer',
        'metodoPagamento' => 'integer',
        'idCliente' => 'integer',
        'idVendedor' => 'integer',
        'idProduto' => 'integer',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente', 'id');
    }

    /**
     * Relacionamento: Vendedor.
     */
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'idVendedor', 'id');
    }

    /**
     * Relacionamento: Produto.
     */
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'idProduto', 'id');
    }
}
