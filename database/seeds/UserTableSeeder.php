<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run(){
      User::create([
        'name' => 'Nahuel Wagner',
        'email' => 'elprofe@gmail.com',
        'password' => bcrypt('12345'),
      ])->assignRole('SuperAdmin');

    factory(User::class,5)->create(); //creo 5 usuarios en la bd
    }
}
