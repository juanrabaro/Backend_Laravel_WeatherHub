<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCiudadesUsuariosRequest;
use App\Http\Requests\UpdateCiudadesUsuariosRequest;
use App\Http\Resources\CiudadesUsuariosCollection;
use App\Http\Resources\CiudadesUsuariosResource;
use App\Models\CiudadesUsuarios;

class CiudadesUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CiudadesUsuariosCollection(CiudadesUsuarios::paginate(10));
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
    public function store(StoreCiudadesUsuariosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CiudadesUsuarios $ciudadesUsuarios)
    {
        return new CiudadesUsuariosResource($ciudadesUsuarios);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CiudadesUsuarios $ciudadesUsuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCiudadesUsuariosRequest $request, CiudadesUsuarios $ciudadesUsuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CiudadesUsuarios $ciudadesUsuarios)
    {
        //
    }
}
