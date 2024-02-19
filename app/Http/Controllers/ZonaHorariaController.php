<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreZonaHorariaRequest;
use App\Http\Requests\UpdateZonaHorariaRequest;
use App\Http\Resources\ZonaHorariaCollection;
use App\Http\Resources\ZonaHorariaResource;
use App\Models\ZonaHoraria;

class ZonaHorariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ZonaHorariaCollection(ZonaHoraria::paginate(10));
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
    public function store(StoreZonaHorariaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ZonaHoraria $zonaHoraria)
    {
        return new ZonaHorariaResource($zonaHoraria);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ZonaHoraria $zonaHoraria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZonaHorariaRequest $request, ZonaHoraria $zonaHoraria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ZonaHoraria $zonaHoraria)
    {
        //
    }
}
