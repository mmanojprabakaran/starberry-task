<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create(array(
        'name'     => 'Manoj',
        'email'    => 'manoj@gmail.com',
        'password' => Hash::make('123'),
        'remember_token' => str_random(10),
    ));
    }
}
