<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            [
                'name' => 'Matematicas',
                'description' => 'Bienvenido a la sección donde podra editar los datos de una materia, y Asociarlos a un Profesor.',
                'profesor_id' => 1
            ], [
                'name' => 'Base de Datos',
                'description' => 'Multilingual Lorem Ipsum Generator for Laravel',
                'profesor_id' => 2
            ]
        ]);
    }
}
