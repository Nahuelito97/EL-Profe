<?php

use App\Provincies;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProvinciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincies')->insert([
            [
                'pais_id' => 1,
                'name' => 'Misiones'
            ]
        ]);
    }
}
