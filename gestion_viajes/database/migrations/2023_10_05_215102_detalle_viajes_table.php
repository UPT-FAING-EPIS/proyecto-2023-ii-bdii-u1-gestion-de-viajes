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
        Schema::create('detalle_viajes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('viaje_id');
            $table->foreign('viaje_id')->references('id')->on('viajes')->onDelete('restrict'); //onDelete('cascade')

            $table->string('tipo_detalle');
            $table->string('nombre');
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_viajes');
    }
};
