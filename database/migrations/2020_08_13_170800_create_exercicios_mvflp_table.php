<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciciosMvflpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicios_mvflp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_recompensa');
            $table->unsignedBigInteger('id_nivel');
            $table->unsignedBigInteger('id_formula');
            $table->string('nome');
            $table->text('enunciado');
            $table->string('hash');
            $table->string('url');
            $table->integer('tempo')->nullable();
            $table->integer('qndt_erros')->nullable();
            $table->text('descricao');
            $table->boolean('ativo');
            $table->timestamps();
            $table->foreign('id_recompensa')->references('id')->on('recompensas');
            $table->foreign('id_nivel')->references('id')->on('niveis_mvflp');
            $table->foreign('id_formula')->references('id')->on('formulas')->onDelete('cascade');
            $table->integer('id_logic_live')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercicios_mvflp');
    }
}
