<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'comentario',
        'fecha_partida',
        'fecha_regreso',
        'destino_id',
    ];

    protected $dates = [
        'fecha_partida',
        'fecha_regreso',
    ];


    public function destino()
    {
        return $this->belongsTo('App/Models/Destino');
    }


    public function detalle_viaje()
    {
        return $this->hasMany('App/Models/DetalleViaje');
    }
}
