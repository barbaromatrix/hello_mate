<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenciaImovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferencia_imoveis', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('imovel_id')->unsigned();
                $table->foreign('imovel_id')->references('id')->on('imoveis');
                
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
        Schema::table('preferencia_imoveis', function (Blueprint $table) {
            $table->dropForeign(['imovel_id']);
            $table->dropForeign(['preferencia_id']);
        });
        Schema::dropIfExists('preferencia_imoveis');
    }
}
