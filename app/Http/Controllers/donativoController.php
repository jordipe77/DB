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
        $donativo = new Donativo();

        $donativo->subtipos_id = 1;

        $donativo->usuarios_id=4;

        $donativo->unidades= $request->input("unidades");


//         if($request->input("tipo_donante")==1){

//              $donativo->donantes_id =1;
//         }
//         if($request->input("tipo_donante")==2){

//             $donativo->donantes_id =2;
//        }
//        if($request->input("tipo_donante")==3){

//         $donativo->donantes_id =3;
//    }

$donativo->donantes_id = 21;

        //-------------------------------------
        if($request->input("centro_receptor")=="option1"){
            $donativo->centros_receptor_id=1;
        }
        if($request->input("centro_receptor")=="option2"){
            $donativo->centros_receptor_id=2;
        }
        if($request->input("centro_receptor")=="option3"){
            $donativo->centros_receptor_id=3;
        }
        if($request->input("centro_receptor")=="option4"){
            $donativo->centros_receptor_id=4;
        }
        if($request->input("centro_receptor")=="option5"){
            $donativo->centros_receptor_id=5;
        }
        if($request->input("centro_receptor")=="option6"){
            $donativo->centros_receptor_id=6;
        }

        //-------------------------------------

        if($request->input("centro_destino")=="option1"){
            $donativo->centros_desti_id=1;
        }
        if($request->input("centro_destino")=="option2"){
            $donativo->centros_desti_id=2;
        }
        if($request->input("centro_destino")=="option3"){
            $donativo->centros_desti_id=3;
        }
        if($request->input("centro_destino")=="option4"){
            $donativo->centros_desti_id=4;
        }
        if($request->input("centro_destino")=="option5"){
            $donativo->centros_desti_id=5;
        }
        if($request->input("centro_destino")=="option6"){
            $donativo->centros_desti_id=6;
        }

        //-------------------------------------

        $donativo->peso=$request->input("peso");
        $donativo->coste=$request->input("coste");
        $donativo->hay_factura=true;

        $donativo->save();

        return redirect('/dashboard');
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
