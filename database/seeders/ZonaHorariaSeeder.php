<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZonaHorariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 1,
            'hora_zona' => 0,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 2,
            'hora_zona' => 0,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 3,
            'hora_zona' => 0,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 4,
            'hora_zona' => 0,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 5,
            'hora_zona' => -1,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 6,
            'hora_zona' => -4,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 7,
            'hora_zona' => 0,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 8,
            'hora_zona' => 0,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 9,
            'hora_zona' => 0,
        ]);
        \App\Models\ZonaHoraria::factory()->create([
            'ciudad_id' => 10,
            'hora_zona' => 0,
        ]);
    }
}
