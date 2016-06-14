<?php

use Illuminate\Database\Seeder;
use App\Cartao;

class CartoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartoes =array(
            array('sumula_id' => 1, 'jogador_id' => 6,  'instante' =>'2016-06-01 16:27:32',  'tipo' => 'amarelo','created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('sumula_id' => 3, 'jogador_id' => 72, 'instante' =>'2016-06-08 16:40:13', 'tipo' => 'amarelo', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            );
        Cartao::insert($cartoes);
    }
}
