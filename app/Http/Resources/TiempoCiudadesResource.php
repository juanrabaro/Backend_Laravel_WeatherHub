<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TiempoCiudadesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'idCiudad' => $this->ciudad_id,
            'temperatura' => $this->temperatura,
            'humedad' => $this->humedad,
            'viento' => $this->viento,
        ];
    }
}