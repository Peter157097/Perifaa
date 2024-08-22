<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    use HasFactory;

    protected $table = 'tbtamanho'; // Nome da tabela
    protected $primaryKey = 'idTamanho'; // Chave primária
    public $timestamps = false;

    protected $fillable = ['nomeTamanho']; // Campos que podem ser preenchidos
}