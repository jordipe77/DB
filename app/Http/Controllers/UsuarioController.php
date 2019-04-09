<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $usuario = new Usuario();

        if($request->has('search'))
        {
            $search = $request->input('search');
            $usuarios = Usuario:: where('nombre_usuario', 'like', '%'.$search.'%')
                            ->orderby('nombre_usuario')
                            ->paginate(5);
        }
        else
        {
            $search= '';
            $usuarios = Usuario::orderby('nombre_usuario')->paginate(5);
        }


        $datos['usuarios'] = $usuarios;
        $datos['search'] = $search;

        return view('buscarUsuario', $datos);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $usuario = new Usuario();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $usuario = Usuario::all();
        $usuario = Usuario::find($id);

        $datos['usuario'] = $usuario;

        return view('auth.editUsuario', $datos);
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
        $usuario = Usuario::find($id);

        $usuario->nombre = $request->input('nombre');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->nombre_usuario = $request->input('nombre_usuario');
        $usuario->correo = $request->input('correo');
        $usuario->roles_id = 1;


        if (Hash::check($request->input('password_confirmation'), $usuario->password)){ //compruebo que el password_confirm es igual que el password

            $usuario->save();

            return redirect()->action('UsuarioController@index');

        }
        else{


            return redirect('editUsuario')->withInput();
        }

        // $usuario->nombre = $request->input('nombre');
        // $usuario->password = Hash::make($request->input('password'));
        // $usuario->nombre_usuario = $request->input('nombre_usuario');
        // $usuario->correo = $request->input('correo');
        // $usuario->roles_id = 1;
        // $usuario->save();


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Usuario $usuario)
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        $usuario->delete();

        return redirect()->action('UsuarioController@index');

    }
}
