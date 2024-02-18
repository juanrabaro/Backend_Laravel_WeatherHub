<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function usuarios()
    {
        return $this->belongsToMany(Usuarios::class, 'ciudades_usuarios');
    }

    public function zonaHoraria()
    {
        return $this->belongsTo(ZonaHoraria::class);
    }

    public function tiempoCiudad()
    {
        return $this->belongsTo(TiempoCiudad::class);
    }
}
