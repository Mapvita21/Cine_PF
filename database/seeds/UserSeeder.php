<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
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
