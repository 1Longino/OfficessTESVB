<?php

namespace App\Http\Controllers;

use App\OViaticos;
use App\Asignamunicipios;
use App\Destinos;
use App\Origenes;
use App\Personales;

use Illuminate\Http\Request;

class OViaticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oviaticos=OViaticos::all();
        return view("Oficioscviaticos.index",compact('oviaticos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personales=Personales::all();
        $asignamunic=Asignamunicipios::all();
        $origenes=Origenes::all();
        $destinos=Destinos::all();


        return view("Oficioscviaticos.create",compact("personales",'asignamunic','origenes','destinos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OViaticos::create($request->all());
        return redirect("oviaticos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OViaticos  $oViaticos
     * @return \Illuminate\Http\Response
     */
    public function show(OViaticos $oViaticos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OViaticos  $oViaticos
     * @return \Illuminate\Http\Response
     */
    public function edit(OViaticos $oViaticos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OViaticos  $oViaticos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OViaticos $oViaticos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OViaticos  $oViaticos
     * @return \Illuminate\Http\Response
     */
    public function destroy(OViaticos $oViaticos)
    {
        //
    }
}
