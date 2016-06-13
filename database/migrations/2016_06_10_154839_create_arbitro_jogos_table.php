<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbitroJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitro_jogos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('arbitro_id')->unsigned()->index();
            $table->foreign('arbitro_id')
                 ->references('id')->on('arbitros');
            $table->integer('jogo_id')->unsigned()->index();
            $table->foreign('jogo_id')
                 ->references('id')->on('jogos');
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
        Schema::drop('arbitro_jogos');
    }
}
