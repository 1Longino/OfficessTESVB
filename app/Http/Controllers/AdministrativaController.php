<?php

namespace App\Http\Controllers;

use App\Administrativa;
use Illuminate\Http\Request;

class AdministrativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrativas=Administrativa:: orderby('id_unidad_admin')->get();
        return view("Administrativos.index",compact('administrativas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Administrativos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $administrativas=array('descripcion_unidad'=>$request->descripcion,
            'clave_unidad'=>$request->clave);
        Administrativa::create($administrativas);
        return redirect("administrativas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrativa  $administrativa
     * @return \Illuminate\Http\Response
     */
    public function show(Administrativa $administrativa)
    {
        return view("Administrativos.edit",compact('administrativa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrativa  $administrativa
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrativa $administrativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrativa  $administrativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrativa $administrativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrativa  $administrativa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrativa $administrativa)
    {
        //
    }
}
