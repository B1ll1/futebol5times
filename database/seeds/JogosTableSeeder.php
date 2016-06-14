<?php

use Illuminate\Database\Seeder;
use App\Jogo;

class JogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jogos =array(
            //IDA
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-01 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-01 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-08 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-08 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-15 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-15 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-22 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-22 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-29 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-29 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //VOLTA
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-06 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-06 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-13 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-13 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-20 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-20 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-27 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-07-27 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-08-03 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-08-03 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString())
        );
        Jogo::insert($jogos);
    }
}
