<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roupa extends Model
{
    use HasFactory;

    protected $table = 'tbgenero'; // Nome da tabela
    protected $primaryKey = 'idGenero'; // Chave primária
    public $timestamps = false;

    protected $fillable = ['nomeGenero']; // Campos que podem ser preenchidos
}
