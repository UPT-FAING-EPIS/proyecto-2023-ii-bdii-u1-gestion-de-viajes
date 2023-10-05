<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//
use App\Models\Viaje;
use App\Models\Destino;
use Illuminate\Support\Facades\DB;

class ViajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Vaciar Tabla
        //Viaje::truncate();


        //Crear datos falsos
        $faker = \Faker\Factory::create();

        //$destinosIds = DB::table('destinos')->pluck('id')->toArray();

        // Obtener todos los destinos
        $destinos = Destino::all();

        foreach ($destinos as $destino) {

            for ($i = 0; $i < 10; $i++) {
                Viaje::create([
                    'titulo' => $faker->sentence,
                    'comentario' => $faker->paragraph,
                    'fecha_partida' => $faker->date,
                    'fecha_regreso' => $faker->date,
                    'destino_id' => $destino->id,
                ]);
            }
        }
    }
}
