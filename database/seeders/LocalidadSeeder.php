<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidads')->insert([
            [
                'provincies_id' => 1,
                'name' => '2 de Mayo',
                'cod_post' => '3363'
            ], [
                'provincies_id' => 1,
                'name' => '25 de Mayo',
                'cod_post' => '3364'
            ], [
                'provincies_id' => 1,
                'name' => 'Alba Posee',
                'cod_post' => '3363'
            ], [
                'provincies_id' => 1,
                'name' => 'Andresito',
                'cod_post' => '3364'
            ], [
                'provincies_id' => 1,
                'name' => 'Apostoles',
                'cod_post' => '3350'
            ], [
                'provincies_id' => 1,
                'name' => 'Aristoublo del Valle',
                'cod_post' => '3364'
            ], [
                'provincies_id' => 1,
                'name' => 'Bernado de Irigoyen',
                'cod_post' => '3366'
            ], [
                'provincies_id' => 1,
                'name' => 'Campo Grande',
                'cod_post' => '3362'
            ], [
                'provincies_id' => 1,
                'name' => 'Campo Viera',
                'cod_post' => '3362'
            ], [
                'provincies_id' => 1,
                'name' => 'Candelaria',
                'cod_post' => '3308'
            ], [
                'provincies_id' => 1,
                'name' => 'Capiovi',
                'cod_post' => '3332'
            ], [
                'provincies_id' => 1,
                'name' => 'Caraguatay',
                'cod_post' => '3386'
            ], [
                'provincies_id' => 1,
                'name' => 'Colonia Victoria',
                'cod_post' => '3382'
            ],  [
                'provincies_id' => 1,
                'name' => 'Concepción de la Sierra',
                'cod_post' => '3355'
            ], [
                'provincies_id' => 1,
                'name' => 'Corpus',
                'cod_post' => '0376'
            ], [
                'provincies_id' => 1,
                'name' => 'El Alcazar',
                'cod_post' => '3384'
            ], [
                'provincies_id' => 1,
                'name' => 'El Dorado',
                'cod_post' => '3380'
            ], [
                'provincies_id' => 1,
                'name' => 'El Soberbio',
                'cod_post' => '3364'
            ], [
                'provincies_id' => 1,
                'name' => 'Garupa',
                'cod_post' => '3304'
            ], [
                'provincies_id' => 1,
                'name' => 'Gobernador Roca',
                'cod_post' => '3324'
            ], [
                'provincies_id' => 1,
                'name' => 'Jardin America',
                'cod_post' => '3328'
            ], [
                'provincies_id' => 1,
                'name' => 'Leandro Alem',
                'cod_post' => '3315'
            ], [
                'provincies_id' => 1,
                'name' => 'Loreto',
                'cod_post' => '0376'
            ], [
                'provincies_id' => 1,
                'name' => 'Montecarlo',
                'cod_post' => '3384'
            ], [
                'provincies_id' => 1,
                'name' => 'Obera',
                'cod_post' => '3360'
            ], [
                'provincies_id' => 1,
                'name' => 'Panambi',
                'cod_post' => '3361'
            ], [
                'provincies_id' => 1,
                'name' => 'Paraíso',
                'cod_post' => '3352'
            ], [
                'provincies_id' => 1,
                'name' => 'Posadas',
                'cod_post' => '3300'
            ], [
                'provincies_id' => 1,
                'name' => 'Puerto Esperanza',
                'cod_post' => '3378'
            ], [
                'provincies_id' => 1,
                'name' => 'Puerto Iguazú',
                'cod_post' => '3370'
            ], [
                'provincies_id' => 1,
                'name' => 'Puerto Libertad',
                'cod_post' => '3374'
            ], [
                'provincies_id' => 1,
                'name' => 'Puerto Mineral',
                'cod_post' => '3332'
            ], [
                'provincies_id' => 1,
                'name' => 'Puerto Piray',
                'cod_post' => '3381'
            ], [
                'provincies_id' => 1,
                'name' => 'Puerto Rico',
                'cod_post' => '3334'
            ], [
                'provincies_id' => 1,
                'name' => 'Salto Encantado',
                'cod_post' => '3364'
            ], [
                'provincies_id' => 1,
                'name' => 'San Antonio',
                'cod_post' => '3366'
            ], [
                'provincies_id' => 1,
                'name' => 'San Ignacio',
                'cod_post' => '3322'
            ], [
                'provincies_id' => 1,
                'name' => 'San Javier',
                'cod_post' => '3357'
            ], [
                'provincies_id' => 1,
                'name' => 'San Pedro',
                'cod_post' => '3352'
            ], [
                'provincies_id' => 1,
                'name' => 'Santa Ana',
                'cod_post' => '3316'
            ], [
                'provincies_id' => 1,
                'name' => 'Santa María',
                'cod_post' => '3353'
            ], [
                'provincies_id' => 1,
                'name' => 'Santa Rita',
                'cod_post' => '3363'
            ], [
                'provincies_id' => 1,
                'name' => 'San Vicente',
                'cod_post' => '3356'
            ], [
                'provincies_id' => 1,
                'name' => 'Tobuna',
                'cod_post' => '3364'
            ], [
                'provincies_id' => 1,
                'name' => 'Wanda',
                'cod_post' => '3376'
            ]
        ]);
    }
}
