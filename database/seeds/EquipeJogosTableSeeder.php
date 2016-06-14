<?php

use Illuminate\Database\Seeder;
use App\Sumula;
class EquipeJogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sumula =array(
            array('campo_id' => 1,  'equipe_id_casa' => 1, 'equipe_id_visitante' => 2, 'jogo_id' => 1, 'ganhador_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 3,  'equipe_id_casa' => 3, 'equipe_id_visitante' => 4, 'jogo_id' => 2, 'ganhador_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 1,  'equipe_id_casa' => 1, 'equipe_id_visitante' => 5, 'jogo_id' => 3, 'ganhador_id' => 0, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 3,  'equipe_id_casa' => 3, 'equipe_id_visitante' => 2, 'jogo_id' => 4, 'ganhador_id' => 0, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 1,  'equipe_id_casa' => 1, 'equipe_id_visitante' => 3, 'jogo_id' => 5, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4,  'equipe_id_casa' => 4, 'equipe_id_visitante' => 5, 'jogo_id' => 6, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 1,  'equipe_id_casa' => 1, 'equipe_id_visitante' => 4, 'jogo_id' => 7, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2,  'equipe_id_casa' => 2, 'equipe_id_visitante' => 5, 'jogo_id' => 8, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2,  'equipe_id_casa' => 2, 'equipe_id_visitante' => 4, 'jogo_id' => 9, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 3,  'equipe_id_casa' => 3, 'equipe_id_visitante' => 5, 'jogo_id' => 10, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2,  'equipe_id_casa' => 2, 'equipe_id_visitante' => 1, 'jogo_id' => 11, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4,  'equipe_id_casa' => 4, 'equipe_id_visitante' => 3, 'jogo_id' => 12, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5,  'equipe_id_casa' => 5, 'equipe_id_visitante' => 1, 'jogo_id' => 13, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 2,  'equipe_id_casa' => 2, 'equipe_id_visitante' => 3, 'jogo_id' => 14, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 3,  'equipe_id_casa' => 3, 'equipe_id_visitante' => 1, 'jogo_id' => 15, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5,  'equipe_id_casa' => 5, 'equipe_id_visitante' => 4, 'jogo_id' => 16, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4,  'equipe_id_casa' => 4, 'equipe_id_visitante' => 1, 'jogo_id' => 17, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5,  'equipe_id_casa' => 5, 'equipe_id_visitante' => 2, 'jogo_id' => 18, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 4,  'equipe_id_casa' => 4, 'equipe_id_visitante' => 2, 'jogo_id' => 19, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('campo_id' => 5,  'equipe_id_casa' => 5, 'equipe_id_visitante' => 3, 'jogo_id' => 20, 'ganhador_id' => null, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString())
        );
        Sumula::insert($sumula);
    }
}
