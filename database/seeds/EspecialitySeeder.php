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
        factory(Especiality::class, 20)->create();
    }
}
