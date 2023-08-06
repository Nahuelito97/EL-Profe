<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directions')->insert([
            [
                'localidad_id' => 5,
                'name' => 'Los alamos',
                'number' => '5000'
            ],
            [
                'localidad_id' => 3,
                'name' => 'Avenida Roque Perez',
                'number' => '4332'
            ],
            [
                'localidad_id' => 8,
                'name' => 'Los alamos',
                'number' => '4897'
            ],
            [
                'localidad_id' => 1,
                'name' => 'España',
                'number' => '2478'
            ],
            [
                'localidad_id' => 15,
                'name' => 'Alverar',
                'number' => '4433'
            ]

        ]);
    }
}
