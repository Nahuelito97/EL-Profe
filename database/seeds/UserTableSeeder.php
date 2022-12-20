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

      User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin'),
      ])->assignRole('Admin');

    }
}
