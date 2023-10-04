<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//
use App\Models\Viaje;

class ViajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Vaciar Tabla
        Viaje::truncate();


        //Crear datos falsos
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Viaje::create([
                'titulo' => $faker->sentence,
                'comentario' => $faker->paragraph,
                'fecha_partida' => $faker->date,
                'fecha_regreso' => $faker->date,
            ]);
        }
    }
}
