<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'tbcategoriaproduto'; // Nome da tabela
    protected $primaryKey = 'idCategoriaProduto'; // Chave primária
    public $timestamps = false;

    protected $fillable = ['nomeCategoriaProduto']; // Campos que podem ser preenchidos
}
