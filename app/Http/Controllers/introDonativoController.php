<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Models\Tipo;
use App\Models\Donativo;
use App\Models\Centro;
use App\Models\TipoDonantes;
use App\Models\Usuario;
use App\Models\Donante;
use Session;
use View;
use App\Models\Subtipo;

class introDonativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tipo_list = Tipo::all();
       $data['tipo_list'] = $tipo_list;

       $centros = Centro::all();
       $data['centros'] = $centros;

       $tipos_donantes = TipoDonantes::orderBy('id','DESC')->get();
       $data['tipos_donantes'] = $tipos_donantes;

       return view ('hacerDonacion',$data);
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

        $donativo->subtipos_id = $request->input("subtipo");
        $donativo->unidades= $request->input("unidades");
        $donativo->desc_animal = $request->input("desc_animal");
        $donativo->centros_receptor_id = $request->input("centro_receptor");
        $donativo->centro_receptor_altres = $request->input("centro_receptor_altres");
        $donativo->centros_desti_id = $request->input("centro_desti");
        $donativo->peso=$request->input("peso");
        $donativo->coste=$request->input("coste");
        $donativo->fecha_donativo = date("Y-m-d");
        $donativo->donantes_id = $request->input("donantes_id");
        // $donativo->donantes_id = 1;
        $donativo->usuarios_id=Auth::user()->id;


        //--------------FACTURA--------------------------

        if($request->input("hay_factura")=="1"){

            $donativo->hay_factura=true;

            $file = $request->file("rutaFactura");



                $file_path =  $file->getClientOriginalName();
                Storage::disk('local')->putFileAs('facturas/', $file, $file_path);

                $donativo->ruta_factura = "facturas/". $file_path;
        }
        else
        {
            $donativo->hay_factura=false;
        }
        //----------------------------------------






        $donativo->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function enviar()
    {
        $mibool = true;
        $data['mibool'] = $mibool;
        return View::make('nuevoDonante')->with('mibool', $mibool);
    }

}
