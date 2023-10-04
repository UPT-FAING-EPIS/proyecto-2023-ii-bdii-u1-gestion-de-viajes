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
        Schema::create('viajes', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('comentario');
            $table->date('fecha_partida');
            $table->date('fecha_regreso')->nullable();

            //$table->unsignedBigInteger('destino_id');
            //$table->foreign('destino_id')->references('id')->on('destinos');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
