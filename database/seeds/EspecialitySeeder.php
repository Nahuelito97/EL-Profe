<?php

use Illuminate\Database\Seeder;
use App\Especiality;
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
                'name' => 'DEPORTES'
            ],[
                'name' => 'ECONOMIA Y NEGOCIOS'
            ],[
                'name' => 'ENTRETENIMIENTO'
            ],[
                'name' => 'FAMILIA Y BIENESTAR'
            ],[
                'name' => 'HOGAR Y DECORACION'
            ]
        ]);
    }
}
