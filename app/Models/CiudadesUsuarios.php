<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiudadesUsuarios extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function usuarios()
    {
        return $this->hasMany(Usuarios::class);
    }
}
