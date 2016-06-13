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
            array('nome' => 'Estádio Beira-Rio', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estádio Mineirão', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estádio Independência', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estádio Joaquim Américo Guimarães', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estádio do Morumbi', 'dimensoes' => '105 x 68 m', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        );
        Campo::insert($campos);
    }
}
