<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'tbproduto';  // Nome da tabela no banco de dados
    protected $primaryKey = 'idProduto'; // Chave primária da tabela

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
        'imagemProduto2',
        'imagemProduto3',
        'imagemProduto4',
        'imagemProduto5',
        'idVendedor',
    ];

    public $timestamps = false;

    // Relacionamento com a tabela de Cores
    public function cor()
    {
        return $this->belongsTo(Cor::class, 'idCor', 'idCor');
    }

    // Relacionamento com a tabela de Condições
    public function condicao()
    {
        return $this->belongsTo(Condicao::class, 'idCondicao', 'idCondicao');
    }

    // Relacionamento com a tabela de Categorias
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoriaProduto', 'idCategoriaProduto');
    }

    // Relacionamento com a tabela de Tamanhos
    public function tamanho()
    {
        return $this->belongsTo(Tamanho::class, 'idTamanho', 'idTamanho');
    }


    // Relacionamento com a tabela de Regiões
    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'idRegiao', 'idRegiao');
    }

    // Relacionamento com a tabela de Vendedores
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'idVendedor', 'idVendedor');
    }

    public function favorites()
    {
        return $this->hasMany(Favorito::class, 'produto_id', 'idProduto');
    }
    public function denuncias()
    {
        return $this->hasMany(Denuncia::class, 'idProduto');
    }
}
