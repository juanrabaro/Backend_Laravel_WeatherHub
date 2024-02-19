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
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nombreCiudad' => $this->nombre_ciudad,
            'poblacion' => $this->poblacion,
            'terreno' => $this->terreno,
            'urlImagen' => $this->url_imagen,
            'tiempoCiudad' => new TiempoCiudadesResource($this->whenLoaded('tiempoCiudades')),
        ];
    }
}
