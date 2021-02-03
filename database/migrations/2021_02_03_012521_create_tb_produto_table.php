<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_produto', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->unsignedInteger('id_categoria_produto');
            $table->string('nome_produto');
            $table->dateTime('data_cadastro');
            $table->decimal('valor_produto', 10, 2);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_categoria_produto')->references('id_categoria_planejamento')->on('tb_categoria_produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('td_produto');
    }
}
