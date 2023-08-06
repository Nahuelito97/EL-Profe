<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call(RoleSeeder::class);

        Storage::deleteDirectory('cursos');  //Eliminamos la carpeta con las imagenes debido a que al ejecutarse migrate:fresh --seed no las elimina y vuelve a crear, sino que crea de forma incremental.
        Storage::makeDirectory('cursos'); // Crea una carpeta en cursos\public\storage


        $this->call([
            RoleSeeder::class,
            UserTableSeeder::class,
            LevelSeeder::class,
            CategorySeeder::class,
            PriceSeeder::class,
            CouseSeeder::class,
            PaisSeeder::class,
            ProvinciesSeeder::class,
            LocalidadSeeder::class,
            DirectionSeeder::class,
            EspecialitySeeder::class,
            TelefonoSeeder::class,
            GeneroSeeder::class,

            ProfesorssSeeder::class,
            StudentsSeeder::class,
            MateriasSeeder::class,
        ]);


    }
}
