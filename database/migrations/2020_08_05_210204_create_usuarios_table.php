<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->string('senha');
            $table->string('perfil');
            //$table->date('dataDeNascimento');
            // $table->string('Logradouro');
            // $table->integer('numero');
            // $table->string('bairro');
            // $table->string('cidade');
            // $table->string('estado');
            // $table->string('pais');
            // $table->string('cep');
            //$table->date('dataInclusao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
