<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ciudades()
    {
        return $this->belongsToMany(Ciudades::class, 'ciudades_usuarios');
    }
}
