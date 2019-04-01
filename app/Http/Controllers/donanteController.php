<?php

namespace App\Http\Controllers;

use App\Models\Donante;
use App\Models\TipoDonantes;
use App\Models\Sexo;

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

        // $sexos = new sexo();

        // $sexos->id = 1;
        // $sexos->sexo = "Mujer";

        // $sexos->save();

        $donante = new Donante();

        // $donante->nombre = $request->input('nombre');
        // $donante->cif = $request->input('cif');
        // $donante->correo = $request->input('correo');
        // $donante->direccion = $request->input('direccion');
        // $donante->telefono = $request->input('telefono');
        // $donante->pais = $request->input('pais');
        // $donante->poblacion = $request->input('poblacion');
        // $donante->es_habitual = $request->input('es_habitual');
        // $donante->sexos_id = $request->input('sexos_id');
        // $donante->tipos_donantes_id = $request->input('tipos_donantes_id');
        // $donante->tiene_animales= $request->input('tiene_animales');
        // $donante->vinculo_entidad= $request->input('vinculo_entidad');
        // $donante->spam= $request->input('spam');
        // $donante->es_colaborador= $request->input('es_colaborador');
        // $donante->tipo_colaboracion= $request->input('tipo_colaboracion');
        // $donante->fecha_alta= $request->input('fecha_alta');



        $donante->nombre = $request->input('nombre');
        $donante->cif = $request->input('cif');
        $donante->correo = $request->input('correo');
        $donante->direccion="calle";
        $donante->telefono = $request->input('telefono');
        $donante->pais = $request->input('pais');
        $donante->poblacion = $request->input('poblacion');
        $donante->es_habitual=1;
        $donante->sexos_id =1;
        $donante->tipos_donantes_id=4;
        $donante->tiene_animales=null;
        $donante->vinculo_entidad= $request->input('vinculo_entidad');
        $donante->spam=null;
        $donante->es_colaborador=1;
        $donante->tipo_colaboracion=1;
        $donante->fecha_alta='2019-03-29';

        $donante->save();

        return redirect('/dashboard');




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
