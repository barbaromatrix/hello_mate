<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_foto');
            $table->string('nm_fisico_foto');
            $table->boolean('ic_imagem_principal');
            $table->integer('imovel_id')->unsigned();
                $table->foreign('imovel_id')->references('id')->on('imoveis');
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
        Schema::table('foto_imoveis', function (Blueprint $table) {
            $table->dropForeign(['imovel_id']);
        });
        
        Schema::dropIfExists('foto_imoveis');
    }
}


// 2017_08_01_025918_create_foto_imoveis_table