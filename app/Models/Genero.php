<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'tbGenero';
    protected $primaryKey = 'idGenero';
    public $timestamps = false;
    protected $fillable = ['nomeGenero'];
}