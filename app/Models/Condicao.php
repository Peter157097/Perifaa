<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicao extends Model
{
    use HasFactory;

    protected $table = 'tbcondicao'; // Nome da tabela
    protected $primaryKey = 'idCondicao'; // Chave primária
    public $timestamps = false;

    protected $fillable = ['nomeCondicao']; // Campos que podem ser preenchidos
}
