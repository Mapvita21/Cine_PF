<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create(['name' => '♛Administrador♛',
        'email' => 'admin@hotmail.com', 'password' => bcrypt("admin1234")]);
    }
}
