<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Price;


class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name' => 'Gratis',
            'value' => 0,
        ]);

        Price::create([
            'name' => '19.99 US$ (Nivel 1)',
            'value' => 19.99,
        ]);


        Price::create([
            'name' => '49.99 US$ (Nivel 2)',
            'value' => 49.99,
        ]);


        Price::create([
            'name' => '100 US$ (Nivel 2)',
            'value' => 100,
        ]);
    }
}
