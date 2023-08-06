<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'Nivel Basico',
          ]);

        Level::create([
            'name' => 'Nivel Intermedio',
        ]);

        Level::create([
            'name' => 'Nivel Avanzado',
        ]);
    }
}