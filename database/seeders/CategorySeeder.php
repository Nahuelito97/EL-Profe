<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Desarrollo Web'
         ]);

        Category::create([
            'name' => 'Diseño Web'
        ]);

        Category::create([
            'name' => 'Desarrollo react'
        ]);

        Category::create([
            'name' => 'Desarrollo con laravel'
        ]);
    }
}
