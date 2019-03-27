<?php

namespace App\Http\Controllers;

use App\Models\donativo;
use App\Models\Tipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class donativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tipo_list'] = Tipo::all();

        return view('hacerDonacion',$data);
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
