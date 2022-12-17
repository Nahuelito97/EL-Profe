<?php

use App\Asistence;
use Illuminate\Database\Seeder;

class AsistenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Asistence::class,3)->create();

    }
}
