<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Http\Resources\UsuariosCollection;
use App\Http\Resources\UsuariosResource;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UsuariosCollection(Usuarios::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuariosRequest $request)
    {
        try {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
    
            $usuario = Usuarios::create($data);
    
            return new UsuariosResource($usuario);
        } catch (\Exception $e) {
            // Aquí puedes manejar el error como quieras
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        // dd($usuarios -> ciudadesUsuarios);
        return new UsuariosResource($usuarios->load('ciudadesUsuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuariosRequest $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
