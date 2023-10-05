<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleViaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'viaje_id',
        'tipo_detalle',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
    ];


    public function viaje()
    {
        return $this->belongsTo('App/Models/Viaje');
    }


    public function costo_detalle()
    {
        return $this->hasMany('App/Models/CostoDetalle');
    }
}
