<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_imovel');
            $table->string('nm_logradouro');
            $table->string('nm_cidade');
            $table->string('nm_estado');
            $table->integer('foto_imovel_id')->unsigned();
                $table->foreign('foto_imovel_id')->references('id')->on('foto_imoveis');
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
        Schema::table('imoveis', function (Blueprint $table) {
            $table->dropForeign(['foto_imovel_id']);
            $table->dropForeign(['usuario_id']);
        });
        Schema::dropIfExists('imoveis');
    }
}
