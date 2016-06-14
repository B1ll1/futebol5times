<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipeJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe_jogos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campo_id');
            $table->integer('equipe_id_casa')->unsigned()->index();
            $table->foreign('equipe_id_casa')
                 ->references('id')->on('equipes');
            $table->integer('equipe_id_visitante')->unsigned()->index();
            $table->foreign('equipe_id_visitante')
                 ->references('id')->on('equipes');
            $table->integer('jogo_id')->unsigned()->index();
            $table->foreign('jogo_id')
                 ->references('id')->on('jogos');
            $table->integer('ganhador_id')->nullable();
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
        Schema::drop('equipe_jogos');
    }
}
