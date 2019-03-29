<?php

namespace App\Http\Controllers;

use App\Models\Donante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class donanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donante = new Donante();

        $donante->nombre = $request->input('nombre');
        $donante->dni = $request->input('dni');
        $donante->correo = $request->input('correo');
        $donante->telefono = $request->input('telefono');
        $donante->pais = $request->input('pais');
        $donante->poblacion = $request->input('poblacion');
        $donante->telefono = $request->input('telefono');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function show(donante $donante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function edit(donante $donante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donante $donante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function destroy(donante $donante)
    {
        //
    }
}
