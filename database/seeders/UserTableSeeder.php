<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DateTime;
new \DateTime();

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nahuel',
            'lastname' => 'Wagner',
            'username' => 'Nahuelito97',
            'dni' => '43204307',
            'date_of_birth' => new DateTime(),
            'phone' => '+543751696734',
            'email' => 'elprofe@gmail.com',
            'password' => bcrypt('12345'),
        ])->assignRole('Administrador');


        User::factory()->count(10)->create();

    }
}
