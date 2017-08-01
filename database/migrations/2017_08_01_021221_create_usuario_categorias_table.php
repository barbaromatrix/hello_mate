<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_categorias', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('usuario_id')->unsigned();
                $table->foreign('usuario_id')->references('id')->on('usuarios');
                
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
        Schema::table('usuario_categorias', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['categoria_id']);
        });
        
        Schema::dropIfExists('usuario_categorias');
    }
}
