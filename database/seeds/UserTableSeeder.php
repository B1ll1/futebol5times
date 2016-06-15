<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array('name' => 'Narrador', 'email' => 'narrador@email.com', 'password' => bcrypt('123456'));
        User::insert($user);
    }
}
