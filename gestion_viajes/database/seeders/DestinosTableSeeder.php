<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//
use App\Models\Destino;
use Illuminate\Support\Facades\DB;


class DestinosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Vaciar Tabla
        //Destino::truncate();


        //Crear datos falsos
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            Destino::create([
                'ciudad' => $faker->city,
                'pais' => $faker->country,
                'descripcion' => $faker->text,
            ]);
        }
    }
}
