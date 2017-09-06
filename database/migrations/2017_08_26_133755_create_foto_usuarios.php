<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_foto');
            $table->string('nm_fisico_foto');
            $table->boolean('ic_imagem_principal');
            $table->integer('usuario_id')->unsigned();
                $table->foreign('usuario_id')->references('id')->on('usuarios');
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
        Schema::table('foto_usuarios', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
        });
        Schema::dropIfExists('foto_usuarios');
    }
}
