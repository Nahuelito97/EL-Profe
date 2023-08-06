<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialities')->insert([
            [
                'name' => 'Matematicas',
                'description' => 'Bienvenido a la sección donde podra editar los datos de una materia, y Asociarlos a un Profesor.',

            ], [
                'name' => 'Base de Datos',
                'description' => 'Multilingual Lorem Ipsum Generator for Laravel',

            ]
        ]);
    }
}
