<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        DB::table('generos')->insert([
            [
                'name' => 'No especificado',
            ],
            [
                'name' => 'Femenino',
            ],
            [
                'name' => 'Masculino',
            ],

        ]);
    }
}
