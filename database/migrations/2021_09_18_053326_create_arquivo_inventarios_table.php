<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArquivoInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivo_inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_arquivo');
            $table->string('extensao');
            $table->integer('quantidade_linhas');
            $table->integer('cod_interno_inicio');
            $table->integer('cod_interno_fim');
            $table->integer('cod_barras_inicio');
            $table->integer('cod_barras_fim');
            $table->integer('descricao_inicio');
            $table->integer('descricao_fim');
            $table->integer('valor_fabrica_inicio');
            $table->integer('valor_fabrica_fim');
            $table->integer('valor_consumidor_inicio');
            $table->integer('valor_consumidor_fim');
            $table->integer('estoque_inicio');
            $table->integer('estoque_fim');
            $table->integer('secao_inicio');
            $table->integer('secao_fim');
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
        Schema::dropIfExists('arquivo_inventarios');
    }
}
