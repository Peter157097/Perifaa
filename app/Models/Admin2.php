<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin2 extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tbAdministrador';
    protected $primaryKey = 'idAdministrador';

    protected $fillable = [
        'idAdministrador',
        'emailAdministrador',
        'senhaAdminstrador',
    ];
}

