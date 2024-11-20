<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagens extends Model
{
    use HasFactory;

    // Define a tabela associada ao modelo
    protected $table = 'mensagens';

    // Define quais atributos são atribuíveis em massa
    protected $fillable = [
        'idCliente',
        'idVendedor',
        'mensagem',
        'enviado',
        'created_at',
    ];

    // Define as relações com outros modelos, se necessário
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente');
    }

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'idVendedor');
    }
}