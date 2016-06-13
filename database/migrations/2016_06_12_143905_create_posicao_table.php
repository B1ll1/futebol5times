<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posicao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('escalacao_id')->unsigned()->index();
            $table->foreign('escalacao_id')
                 ->references('id')->on('escalacao');
             $table->integer('jogador_id')->unsigned()->index();
            $table->foreign('jogador_id')
                 ->references('id')->on('jogadores');
            $table->string('nome');
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
        Schema::drop('posicao');
    }
}
