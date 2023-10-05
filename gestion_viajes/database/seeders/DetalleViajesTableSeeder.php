<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//
use App\Models\DetalleViaje;
use App\Models\Viaje;
use Illuminate\Support\Facades\DB;

class DetalleViajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Vaciar Tabla
        //DetalleViaje::truncate();


        //Crear datos falsos
        $faker = \Faker\Factory::create();

        //$viajes = DB::table('viajes')->pluck('id')->toArray();

        // Obtener todos los viajes
        $viajes = Viaje::all();

        foreach ($viajes as $viaje) {

            for ($i = 0; $i < 10; $i++) {
                DetalleViaje::create([
                    'viaje_id' => $viaje->id,
                    'tipo_detalle' => $faker->word,
                    'nombre' => $faker->word,
                    'descripcion' => $faker->paragraph,
                    'fecha_inicio' => $faker->date,
                    'fecha_fin' => $faker->date,
                ]);
            }
        }
    }
}
