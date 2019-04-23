<?php

namespace App\Http\Controllers;

use App\Models\donativo;
use App\Models\centro;
use App\Models\Usuario;
use App\Models\animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Date('Y-m-d');
        $recaudacionTotal = Donativo::sum('coste');
        $recaudacionMensual = Donativo::where('fecha_donativo', 'like', '%'.$date.'%')->sum('coste');
        $donacionesTotales = Donativo::all()->count();

        $centros = Centro::all()->count();

        $usuarios = Usuario::all()->count();

        $administradores = Usuario::where('roles_id',2)->count();

        $animales = Animal::all()->count();

        $donativosMensuales = Donativo:: where('fecha_donativo', 'like', '%'.$date.'%')->get()->count();
        $datos['recaudacionTotal'] = $recaudacionTotal;
        $datos['donacionesTotales'] = $donacionesTotales;
        $datos['centros'] = $centros;
        $datos ['usuarios'] = $usuarios;
        $datos ['animales'] = $animales;
        $datos ['donativosMensuales'] = $donativosMensuales;
        $datos ['recaudacionMensual'] = $recaudacionMensual;
        $datos ['administradores'] = $administradores;
        return view('dashboard', $datos);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function show(donativo $donativo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function edit(donativo $donativo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donativo $donativo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donativo  $donativo
     * @return \Illuminate\Http\Response
     */
    public function destroy(donativo $donativo)
    {
        //
    }
}
