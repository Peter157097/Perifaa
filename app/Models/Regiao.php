<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    use HasFactory;

    protected $table = 'tbregiao'; // Nome da tabela
    protected $primaryKey = 'idRegiao'; // Chave primária
    public $timestamps = false;

    protected $fillable = ['nomeRegiao']; // Campos que podem ser preenchidos
}
