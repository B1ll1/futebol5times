<?php

use Illuminate\Database\Seeder;
use App\Arbitro;

class ArbitrosTableSeeder extends Seeder
{
    /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $arbitros =array(
                array('nome' => 'Eduardo Dias Santos', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
                array('nome' => 'Douglas Souza Sousa', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
                array('nome' => 'Daniel Rocha Pereira', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            );
            Arbitro::insert($arbitros);
        }
}
