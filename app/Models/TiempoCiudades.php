<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiempoCiudades extends Model
{
    use HasFactory;

    public function ciudades()
    {
        return $this->hasMany(Ciudades::class);
    }
}
