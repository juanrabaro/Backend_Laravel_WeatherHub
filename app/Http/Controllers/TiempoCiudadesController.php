<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTiempoCiudadesRequest;
use App\Http\Requests\UpdateTiempoCiudadesRequest;
use App\Models\TiempoCiudades;

class TiempoCiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TiempoCiudades::all();
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
    public function store(StoreTiempoCiudadesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TiempoCiudades $tiempoCiudades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TiempoCiudades $tiempoCiudades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTiempoCiudadesRequest $request, TiempoCiudades $tiempoCiudades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TiempoCiudades $tiempoCiudades)
    {
        //
    }
}
