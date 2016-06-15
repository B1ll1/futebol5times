<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EquipesTableSeeder::class);
        $this->call(CamposTableSeeder::class);
        $this->call(JogosTableSeeder::class);
        $this->call(EquipeJogosTableSeeder::class);
        $this->call(JogadoresTableSeeder::class);
        $this->call(ArbitrosTableSeeder::class);
        $this->call(GolsTableSeeder::class);
        $this->call(CartoesTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
