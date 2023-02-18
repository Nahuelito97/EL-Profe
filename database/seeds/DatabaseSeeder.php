<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(ProvinciesSeeder::class);
        $this->call(LocalidadSeeder::class);
        $this->call(DirectionSeeder::class);
        $this->call(EspecialitySeeder::class);
        $this->call(TelefonoSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(ProfesorssSeeder::class);
        $this->call(StudentsSeeder::class);

    }
}
