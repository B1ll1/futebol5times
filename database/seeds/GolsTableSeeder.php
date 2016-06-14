<?php

use Illuminate\Database\Seeder;
use App\Gol;

class GolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gols =array(
            array('sumula_id' => 1, 'jogador_id' => 3, 'equipe_id' => 1, 'instante' =>'2016-06-01 16:35:28', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 1, 'jogador_id' => 19, 'equipe_id' => 2, 'instante' =>'2016-06-01 17:10:15', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 1, 'jogador_id' => 19, 'equipe_id' => 2, 'instante' =>'2016-06-01 17:20:35', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 2, 'jogador_id' => 36, 'equipe_id' => 3, 'instante' =>'2016-06-01 16:30:17', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 2, 'jogador_id' => 36, 'equipe_id' => 3, 'instante' =>'2016-06-01 17:15:02', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 3, 'jogador_id' => 5, 'equipe_id' => 1, 'instante' =>'2016-06-08 16:15:30', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 3, 'jogador_id' => 71, 'equipe_id' => 5, 'instante' =>'2016-06-08 17:15:02', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 4, 'jogador_id' => 38, 'equipe_id' => 3, 'instante' =>'2016-06-08 16:15:30', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 4, 'jogador_id' => 22, 'equipe_id' => 2, 'instante' =>'2016-06-08 17:15:02', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );
        Gol::insert($gols);
    }
}
