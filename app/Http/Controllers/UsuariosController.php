<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Http\Resources\UsuariosCollection;
use App\Http\Resources\UsuariosResource;
use App\Models\Usuarios;
use App\Http\Controllers\AuthController;

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

            $token = AuthController::login($request);

            return response()->json(['message' => 'Usuario registrado correctamente', 'token' => $token, 'usuario' => $usuario], 201);
            // return new UsuariosResource($usuario);
        } catch (\Exception $e) {
            // return response()->json(['error' => $e->getMessage()], 500);
            return response()->json(['error' => 'error, usuario ya registrado o hay otro error'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
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
