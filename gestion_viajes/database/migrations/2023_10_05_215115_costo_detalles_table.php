<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('costo_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('detalle_viaje_id');
            $table->foreign('detalle_viaje_id')->references('id')->on('detalle_viajes')->onDelete('restrict'); //onDelete('cascade')

            $table->decimal('costo', 10, 2);
            $table->string('moneda');
            $table->text('descripcion');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costo_detalles');
    }
};
