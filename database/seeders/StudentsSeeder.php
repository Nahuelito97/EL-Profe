<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


new \DateTime();


class StudentsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Nahuel',
                'surname' => 'Wagner',
                'dni' => '40412208',
                'date_of_birth' => new DateTime(),
                'phone' => '+543755696734',
                'email' => 'nahu@gmail.com',
                'pais_id' => 1,
                'provincies_id' => 1,
                'localities_id' => 9,
                'directions_id' => 1,
                'status' => 1,
            ]
        ]);
    }
}
