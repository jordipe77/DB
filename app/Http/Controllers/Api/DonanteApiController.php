<?php

namespace App\Http\Controllers\Api;

use App\Models\Donante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DonanteResource;
use App\Clases\Utilitat;
use Illuminate\Database\QueryException;

class DonanteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donantes = Donante::all();

        return DonanteResource::collection($donantes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string $busqueda
     * @return \Illuminate\Http\Response
     */
    public function show($busqueda)
    {
        $resultado = Donante::where('nombre','like','%'.$busqueda .'%')->get();
         if($resultado->isEmpty()) {
         $resultado = Donante::where('cif', $busqueda)->get();
         if($resultado->isEmpty()) {
                $resultado = Donante::where('telefono', $busqueda)->get();
                if($resultado->isEmpty()) {
                    $resultado = Donante::where('correo','like','%'.$busqueda .'%')->get();
                }
            }
         }

        return new DonanteResource($resultado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donante $donante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donante $donante)
    {
        //
    }
}
