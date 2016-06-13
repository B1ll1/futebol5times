<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sumula_id')->unsigned()->index();
            $table->foreign('sumula_id')
                 ->references('id')->on('equipe_jogos');
            $table->integer('jogador_id')->unsigned()->index();
            $table->foreign('jogador_id')
                 ->references('id')->on('jogadores');
            $table->timestamp('instante');
            $table->string('tipo');
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
        Schema::drop('cartoes');
    }
}
