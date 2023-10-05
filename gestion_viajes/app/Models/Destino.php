<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciudad',
        'pais',
        'descripcion',
    ];







    public function viaje()
    {
        return $this->hasMany('App/Models/Viaje');
    }
}
