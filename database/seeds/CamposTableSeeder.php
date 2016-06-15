<?php

use Illuminate\Database\Seeder;
use App\Campo;

class CamposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campos =array(
            array('nome' => 'Beira-Rio', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Arena Conda', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Morumbi', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Ilha do Retiro', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vila Belmiro', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );
        Campo::insert($campos);
    }
}
