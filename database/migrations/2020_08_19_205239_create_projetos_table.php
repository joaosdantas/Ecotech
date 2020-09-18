<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->integer('colaboradores');
            $table->decimal('captacao', 7,2);
            $table->integer('parcerias');
            $table->string('interesses');
            // $table->foreignId('usuario_id')->constrained();
            // $table->string('estado');
            // $table->string('pais');
            // $table->integer('premios');
            // $table->integer('locaisProjeto');
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
        Schema::dropIfExists('projetos');
    }
}
