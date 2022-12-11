<?php

use App\Provincies;
use Illuminate\Database\Seeder;

class ProvinciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Provincies::class,23)->create();

    }
}
