<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostoDetalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'detalle_viaje_id',
        'costo',
        'moneda',
        'descripcion',
    ];


    public function detalle_viaje()
    {
        return $this->belongsTo('App/Models/DetalleViaje');
    }
}
