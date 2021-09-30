<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArquivoContagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivo_contagems', function (Blueprint $table) {
            $table->id();
            $table->string('nome_arquivo');
            $table->string('extensao');
            $table->integer('quantidade_linhas');
            $table->integer('lote_inicio');
            $table->integer('lote_fim');
            $table->integer('cod_barras_inicio');
            $table->integer('cod_barras_fim');
            $table->integer('estoque_inicio');
            $table->integer('estoque_fim');
            $table->integer('id_inventario');
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
        Schema::dropIfExists('arquivo_contagems');
    }
}
