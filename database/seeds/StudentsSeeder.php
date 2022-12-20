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
                'phone' => '+543755696734',
                'email' => 'nahu@gmail.com',
                'date_of_address' => new DateTime('now'),
                'pais_id' => 1,
                'provincies_id' => 1,
                'localities_id' => 9,
                'directions_id' => 1,
                'status' => 1,
            ], [
                'name' => 'Vero',
                'surname' => 'Retamar',
                'dni' => '43702321',
                'date_of_birth' => new DateTime('now'),
                'phone' => '+543764567345',
                'email' => 'vero@gmail.com',
                'date_of_address' => new DateTime('now'),
                'pais_id' => 1,
                'provincies_id' => 1,
                'localities_id' => 2,
                'directions_id' => 2,
                'status' => 1,
            ]
        ]);
    }
}
