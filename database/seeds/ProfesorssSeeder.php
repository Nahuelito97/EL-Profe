<?php

use Illuminate\Database\Seeder;
use App\Profesorss;

class ProfesorssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesorss::class,5)->create();
    }
}
