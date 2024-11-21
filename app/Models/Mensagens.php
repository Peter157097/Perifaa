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

    // Relação com o modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente');
    }

    // Relação com o modelo Vendedor
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'idVendedor');
    }

    // Accessor para retornar a imagem de quem enviou
    public function getImagemEnviadaPorAttribute()
    {
        return $this->cliente
            ? $this->cliente->imagemCliente
            : ($this->vendedor ? $this->vendedor->imagemVendedor : null);
    }
}
