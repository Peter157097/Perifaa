<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomeCliente');
            $table->string('emailCliente')->unique(); // Adiciona uma constraint única ao email
            $table->string('telefoneCliente');
            $table->string('cepCliente');
            $table->string('senhaCliente'); // Usa string para a senha
            $table->string('logradouroCliente');
            $table->string('complementoCliente')->nullable(); // Permite nulo se não for sempre necessário
            $table->string('bairroCliente');
            $table->string('cidadeCliente');
            $table->string('estadoCliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
