<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('imovel_id')->unsigned();
                $table->foreign('imovel_id')->references('id')->on('imoveis');
            $table->integer('categoria_id')->unsigned();
                $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::table('imovel_categorias', function (Blueprint $table) {
            $table->dropForeign(['imovel_id']);
            $table->dropForeign(['categoria_id']);
        });
        
        Schema::dropIfExists('imovel_categorias');
    }
}
