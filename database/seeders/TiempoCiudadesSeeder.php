<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiempoCiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 1,
            'temperatura_max' => 17,
            'temperatura_min' => 12,
            'viento' => 10,
            'humedad' => 88,
            'precipitacion' => 0,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 2,
            'temperatura_max' => 16,
            'temperatura_min' => -1,
            'viento' => 10,
            'humedad' => 71,
            'precipitacion' => 0,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 3,
            'temperatura_max' => 18,
            'temperatura_min' => 9,
            'viento' => 8,
            'humedad' => 95,
            'precipitacion' => 0,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 4,
            'temperatura_max' => 13,
            'temperatura_min' => 3,
            'viento' => 18,
            'humedad' => 93,
            'precipitacion' => 0,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 5,
            'temperatura_max' => 12,
            'temperatura_min' => 4,
            'viento' => 27,
            'humedad' => 87,
            'precipitacion' => 45,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 6,
            'temperatura_max' => 29,
            'temperatura_min' => 22,
            'viento' => 16,
            'humedad' => 76,
            'precipitacion' => 0,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 7,
            'temperatura_max' => 12,
            'temperatura_min' => 4,
            'viento' => 23,
            'humedad' => 94,
            'precipitacion' => 10,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 8,
            'temperatura_max' => 15,
            'temperatura_min' => 9,
            'viento' => 8,
            'humedad' => 76,
            'precipitacion' => 70,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 9,
            'temperatura_max' => 19,
            'temperatura_min' => 9,
            'viento' => 6,
            'humedad' => 91,
            'precipitacion' => 0,
        ]);
        \App\Models\TiempoCiudades::factory()->create([
            'ciudad_id' => 10,
            'temperatura_max' => 23,
            'temperatura_min' => 11,
            'viento' => 14,
            'humedad' => 51,
            'precipitacion' => 0,
        ]);
    }
}
