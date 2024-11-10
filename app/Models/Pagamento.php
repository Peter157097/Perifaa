<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'tbpagamento';  // Nome da tabela no banco de dados
    protected $primaryKey = 'idPagamento'; // Chave primária da tabela

    protected $fillable = [
        'StatusPagamento',
    ];

    public $timestamps = false;

}
