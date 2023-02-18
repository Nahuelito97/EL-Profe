<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefonos')->insert([
            [
                'caracteristica' => '+54',
                'numero' => '3755696734'
            ]
        ]);

    }
}
