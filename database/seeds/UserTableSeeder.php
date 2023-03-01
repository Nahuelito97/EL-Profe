<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run(){
      User::create([
        'name' => 'Nahuel',
        'surname' => 'Wagner',
        'dni' => '43204307',
        'date_of_birth' => new DateTime('now'),
        'phone' => '+543751696734',
        'email' => 'elprofe@gmail.com',
        'password' => bcrypt('12345'),
      ])->assignRole('SuperAdmin');
    }
}
