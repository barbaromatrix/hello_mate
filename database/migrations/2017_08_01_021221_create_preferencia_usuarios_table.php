<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenciaUsuariostable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferencia_usuarios', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('usuario_id')->unsigned();
                $table->foreign('usuario_id')->references('id')->on('usuarios');
                
            $table->integer('preferencia_id')->unsigned();
                $table->foreign('preferencia_id')->references('id')->on('preferencias');
            
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
        Schema::table('preferencia_usuarios', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['preferencia_id']);
        });
        
        Schema::dropIfExists('preferencia_usuarios');
    }
}
