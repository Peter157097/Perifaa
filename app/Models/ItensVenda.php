<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItensVenda extends Model
{
    use HasFactory;

    protected $table = 'tbitensvenda';  // Nome da tabela no banco de dados
    protected $primaryKey = 'idItensVenda'; // Chave primária da tabela

    protected $fillable = [
        'idProduto',
        'qtdItensVenda',
        'subTotalItensVenda',
    ];

    public $timestamps = false;

    // Relacionamento com a tabela 
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'idProduto', 'idProduto');
    }



}
