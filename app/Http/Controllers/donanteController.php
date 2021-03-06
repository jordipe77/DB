<?php

namespace App\Http\Controllers;
use App\Models\Donante;
use App\Models\TipoDonantes;
use App\Models\Sexo;
use App\Models\Tipo;
use App\Models\Donativo;
use App\Models\Centro;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Session;
use Illuminate\Database\QueryException;

class donanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search'))
        {
            $search = $request->input('search');
            $donantes = Donante:: where('nombre', 'like', '%'.$search.'%')
                            ->orderby('nombre')
                            ->paginate(5);
        }
        else
        {
            $search= '';
            $donantes = Donante::orderby('nombre')->paginate(5);
        }


        $datos['donantes'] = $donantes;
        $datos['search'] = $search;

        return view('buscarDonante', $datos);
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
        $donante->cif = $request->input('cif');
        $donante->correo = $request->input('correo');
        $donante->direccion=$request->input('direccion');;
        $donante->telefono = $request->input('telefono');
        $donante->pais = $request->input('pais');
        $donante->poblacion = $request->input('poblacion');
        $donante->vinculo_entidad= $request->input('vinculo_entidad');
        $donante->fecha_alta=date("Y-m-d  H:i:s");
        $donante->es_habitual=false;


        //--------------------------------------
        if($request->input('sexos_id') == "1"){
             $donante->sexos_id =1;
        }
        if($request->input('sexos_id') == "2"){
            $donante->sexos_id =2;
        }
        //--------------------------------------

        if($request->input('tiene_animales')=="si"){
            $donante->tiene_animales=true;
        }
        else{
            $donante->tiene_animales=false;
        }
        //--------------------------------------
        if($request->input('spam')=="si"){
            $donante->spam = true;
        }
        else{
            $donante->spam = false;
        }
        //--------------------------------------

        if($request->input('tipo_colaboracion')=="coordinada"){

            $donante->tipo_colaboracion= "Donacion coordinada";
        }
        else{
            $donante->tipo_colaboracion= "Donacion directa";
        }

        //--------------------------------------

        if($request->input('es_habitual')=="si"){

            $donante->es_habitual= true;
     }
         else{
             $donante->es_habitual=false;
         }

        //--------------------------------------

        if($request->input('es_colaborador')=="si"){
            $donante->es_colaborador=true;
        }
        else{
            $donante->es_colaborador=false;
        }

        //--------------------------------------


        if($request->input('tipo_donante')=="particular"){
            $donante->tipos_donantes_id=1;
        }
        else if($request->input('tipo_donante')=="empresa"){
            $donante->tipos_donantes_id=2;
        }
        else{
            $donante->tipos_donantes_id=3;
        }


        $donante->save();
        if($request->input('modalExists'))
        {
           $id_donante = $donante->id;
           $nombre_donante = $donante->nombre;
           Session::flash('id_donante', $id_donante);
           Session::flash('nombre_donante', $nombre_donante);
           return redirect('/introDonativo');
        }
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
    public function edit($id)
    {
        $donante = Donante::find($id);

        $datos['donante'] = $donante;

        return view('editDonante', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donante = Donante::find($id);


        $donante->nombre = $request->input('nombre');
        $donante->cif = $request->input('cif');
        $donante->correo = $request->input('correo');
        $donante->direccion=$request->input('direccion');;
        $donante->telefono = $request->input('telefono');
        $donante->pais = $request->input('pais');
        $donante->poblacion = $request->input('poblacion');
        $donante->vinculo_entidad= $request->input('vinculo_entidad');
        $donante->es_habitual=false;


        //--------------------------------------
        if($request->input('sexos_id') == "mujer"){
             $donante->sexos_id =1;
        }
        if($request->input('sexos_id') == "hombre"){
            $donante->sexos_id =2;
        }
        //--------------------------------------

        if($request->input('tiene_animales')=="si"){
            $donante->tiene_animales=true;
        }
        else{
            $donante->tiene_animales=false;
        }
        //--------------------------------------
        if($request->input('spam')=="si"){
            $donante->spam = true;
        }
        else{
            $donante->spam = false;
        }
        //--------------------------------------

        if($request->input('tipo_colaboracion')=="coordinada"){

            $donante->tipo_colaboracion= "Donacion coordinada";
        }
        else{
            $donante->tipo_colaboracion= "Donacion directa";
        }

        //--------------------------------------

        // if($request->input('es_habitual')=="si"){

        //     $donante->es_habitual= true;
        // }
        // else{
        //     $donante->es_habitual=false;
        // }

        //--------------------------------------

        if($request->input('es_colaborador')=="si"){
            $donante->es_colaborador=true;
        }
        else{
            $donante->es_colaborador=false;
        }

        //--------------------------------------


        if($request->input('tipo_donante')=="particular"){
            $donante->tipos_donantes_id=1;
        }
        else if($request->input('tipo_donante')=="empresa"){
            $donante->tipos_donantes_id=2;
        }
        else{
            $donante->tipos_donantes_id=3;
        }


        $donante->save();

        return redirect()->action('donanteController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donante = Donante::find($id);
        $donante->donativo()->delete();
        $donante->delete();
        return redirect()->action('donanteController@index');
    }


}
