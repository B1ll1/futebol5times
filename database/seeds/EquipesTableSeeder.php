<?php

use Illuminate\Database\Seeder;
use App\Equipe;

class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipes =array(
            array('nome' => 'Internacional', 'photo' => 'internacional', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'América-MG', 'photo' => 'america-mg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Cruzeiro', 'photo' => 'cruzeiro', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Atlético-PR', 'photo' => 'atletico-pr', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'São Paulo', 'photo' => 'saopaulo', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Atlético-MG', 'photo' => 'atletico-mg', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()), --}}
            //array('nome' => 'Botafogo', 'photo' => 'botafogo', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Santos', 'photo' => 'santos', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Santa Cruz', 'photo' => 'santacruz', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Ponte Preta', 'photo' => 'pontepreta', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Vitória', 'photo' => 'vitoria', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Sport', 'photo' => 'sport', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Palmeiras', 'photo' => 'palmeiras', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Grêmio', 'photo' => 'gremio', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Fluminense', 'photo' => 'fluminense', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Figueirense', 'photo' => 'figueirense', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Coritiba', 'photo' => 'coritiba', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Corinthians', 'photo' => 'corinthians', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Chapecoense', 'photo' => 'chapecoense', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            //array('nome' => 'Flamengo', 'photo' => 'flamengo', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString())
        );
        Equipe::insert($equipes);
    }
}
