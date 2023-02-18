<?php

use App\Students;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'date_of_birth' => new DateTime('now'),
                'email' => 'nahu@gmail.com',
                'genero_id' => 3,
                'telefono_id' => 1,
                'pais_id' => 1,
                'provincies_id' => 1,
                'localities_id' => 9,
                'directions_id' => 1,
                'status' => 1,
            ],
        ]);
    }
}
