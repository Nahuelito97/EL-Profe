<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


new \DateTime();

class ProfesorssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesorsses')->insert([
            [
                'name' => 'Claudio',
                'surname' => 'Biale',
                'dni' => '25678987',
                'date_of_birth' => new DateTime(),
                'phone' => '+543764567589',
                'email' => 'biale@gmail.com',
                'pais_id' => 1,
                'provincies_id' => 1,
                'localities_id' => 9,
                'directions_id' => 1,
                'especialitis_id' => 1
            ], [
                'name' => 'Chino',
                'surname' => 'Urquijo',
                'dni' => '25678654',
                'date_of_birth' => new DateTime(),
                'phone' => '+543764567324',
                'email' => 'chino@gmail.com',
                'pais_id' => 1,
                'provincies_id' => 1,
                'localities_id' => 9,
                'directions_id' => 1,
                'especialitis_id' => 2
            ]
        ]);
    }
}