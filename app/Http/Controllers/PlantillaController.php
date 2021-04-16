<?php

namespace App\Http\Controllers;

use App\Plantilla;
use App\Personales;
use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantillas=Plantilla::all();
        return view("plantilla.index",compact('plantillas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personales=Personales::all();
        $subordinado=Personales::all();
        return view("plantilla.create",compact("personales",'subordinado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Plantilla::create($request->all());
        return redirect("plantillas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function show(Plantilla $plantilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantilla $plantilla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantilla $plantilla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plantilla $plantilla)
    {
        //
    }
}
