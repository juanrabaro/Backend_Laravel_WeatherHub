<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuariosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return [
        //     'id' => $this->id,
        //     'nombreUsuario' => $this->nombre_usuario,
        //     'email' => $this->email,
        //     'password' => $this->password,
        //     'ciudadesGuardadas' => new CiudadesUsuariosResource($this->whenLoaded('ciudadesUsuarios')),
        // ];
        return [
            'id' => $this->id,
            'nombreUsuario' => $this->nombre_usuario,
            'email' => $this->email,
            'password' => $this->password,
            'ciudadesGuardadas' => $this->ciudadesUsuarios->map(function ($ciudadesUsuarios) {
                return [
                    'id' => $ciudadesUsuarios->id,
                    'idCiudad' => $ciudadesUsuarios->ciudad_id,
                    'idUsuario' => $ciudadesUsuarios->usuario_id,
                ];
            }),
        ];
    }
}
