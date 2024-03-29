<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CiudadesResource extends JsonResource
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
            'nombreCiudad' => $this->nombre_ciudad,
            'poblacion' => $this->poblacion,
            'terreno' => $this->terreno,
            'clima' => $this->clima,
            'urlImagen' => $this->url_imagen,
            'tiempoCiudad' => new TiempoCiudadesResource($this->whenLoaded('tiempoCiudades')),
            'zonaHoraria' => new ZonaHorariaResource($this->whenLoaded('zonaHoraria')),
        ];
    }
}
