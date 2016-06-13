<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gols', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sumula_id')->unsigned()->index();
            $table->foreign('sumula_id')
                 ->references('id')->on('equipe_jogos');
            $table->integer('jogador_id')->unsigned()->index();
            $table->foreign('jogador_id')
                 ->references('id')->on('jogadores');
            $table->integer('equipe_id')->unsigned()->index();
            $table->foreign('equipe_id')
                 ->references('id')->on('equipes');
            $table->timestamp('instante');
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
        Schema::drop('gols');
    }
}
