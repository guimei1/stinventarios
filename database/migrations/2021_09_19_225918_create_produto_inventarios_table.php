<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('cod_interno');
            $table->string('cod_barras');
            $table->string('descricao');
            $table->decimal('valor_fabrica', 12, 2);
            $table->decimal('valor_consumidor', 12, 2);
            $table->integer('estoque');
            $table->string('secao');
            $table->integer('id_arquivo_inventario');
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
        Schema::dropIfExists('produto_inventarios');
    }
}
