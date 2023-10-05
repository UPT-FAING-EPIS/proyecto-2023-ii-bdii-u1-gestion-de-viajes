<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//
use App\Models\CostoDetalle;
use App\Models\DetalleViaje;
use Illuminate\Support\Facades\DB;

class CostoDetallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Vaciar Tabla
        //CostoDetalle::truncate();


        //Crear datos falsos
        $faker = \Faker\Factory::create();

        //$viajes = DB::table('viajes')->pluck('id')->toArray();

        // Obtener todos los viajes
        $detallesViaje  = DetalleViaje::all();

        foreach ($detallesViaje  as $detalle) {

            for ($i = 0; $i < 10; $i++) {
                CostoDetalle::create([
                    'detalle_viaje_id' => $detalle->id,
                    'costo' => $faker->randomFloat(2, 50, 500),
                    'moneda' => $faker->currencyCode,
                    'descripcion' => $faker->paragraph,
                ]);
            }
        }
    }
}
