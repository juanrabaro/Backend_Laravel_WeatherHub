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
        return $this->belongsToMany(Usuarios::class, 'ciudades_usuarios', 'usuario_id', 'ciudad_id');
    }

    public function zonaHoraria()
    {
        return $this->hasOne(ZonaHoraria::class, 'ciudad_id');
    }

    public function tiempoCiudades()
    {
        return $this->hasOne(TiempoCiudades::class, 'ciudad_id');
    }
}
