<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setings')->insert([
            [
                'name' => 'El-Profe',
            ]
        ]);
    }
}
