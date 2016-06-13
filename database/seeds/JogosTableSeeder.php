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
            array('campo_id' => 1, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-12 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-12 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 1, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-19 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-19 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 1, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-26 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-26 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 1, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-03 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 3, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-03 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 3, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-10 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-10 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //VOLTA
            array('campo_id' => 3, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-17 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-17 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-24 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 3, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-24 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-31 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-31 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-07 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-07 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-14 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5, 'hora_inicio' => '16:00:00', 'hora_fim' => '18:00:00', 'data' => '2016-06-14 16:00:00', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString())
        );
        Jogo::insert($jogos);
    }
}
