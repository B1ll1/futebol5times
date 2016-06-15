<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubstituicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('substituicao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sumula_id')->unsigned()->index();
            $table->foreign('sumula_id')
                 ->references('id')->on('equipe_jogos');
            $table->integer('jogador_id_sai')->unsigned()->index();
            $table->foreign('jogador_id_sai')
                 ->references('id')->on('jogadores');
             $table->integer('jogador_id_entra')->unsigned()->index();
            $table->foreign('jogador_id_entra')
                 ->references('id')->on('jogadores');
            $table->integer('instante');
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
        Schema::drop('substituicao');
    }
}
