<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCiudadesRequest;
use App\Http\Requests\UpdateCiudadesRequest;
use App\Models\Ciudades;
use App\Http\Resources\CiudadesResource;
use App\Http\Resources\CiudadesCollection;
use App\Models\TiempoCiudad;
use App\Models\TiempoCiudades;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CiudadesCollection(Ciudades::with(['tiempoCiudades', 'zonaHoraria'])->paginate(10));
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
    public function store(StoreCiudadesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudades $idCiudad)
    {

        // $tiempoCiudad = TiempoCiudades::find($idCiudad->id);
        // $viento = $tiempoCiudad->viento;
        // dd($viento);
        // return new CiudadesResource($idCiudad);
        return new CiudadesResource($idCiudad->load(['tiempoCiudades', 'zonaHoraria']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudades $ciudades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCiudadesRequest $request, Ciudades $ciudades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciudades $ciudades)
    {
        //
    }
}
