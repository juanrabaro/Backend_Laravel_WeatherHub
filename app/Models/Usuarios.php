<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Usuarios extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $guarded = [];

    public function ciudades()
    {
        return $this->belongsToMany(Ciudades::class, 'ciudades_usuarios', 'usuario_id', 'ciudad_id');
    }

    public function ciudadesUsuarios()
    {
        // trae solo una ciudad con el id del usuario
        return $this->hasMany(CiudadesUsuarios::class, 'usuario_id');
        // return $this->hasMany(Ciudades::class, 'usuario_id');
    }
}
