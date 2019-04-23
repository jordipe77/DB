@extends('templates.plantilla')

@section('titulo')
ADMIN MODE
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

@section('principal')
    <h2 style="color:#007bff;">OPCIONES DE ADMINISTRADOR</h2>

        <div class="row w-100">
            <a href="{{url('/buscarUsuario')}}">
               <div class="col-md-4">

                   <div class="card border-info mx-sm-1 p-3">
                       <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-user" aria-hidden="true"></span></div>
                       <div class="text-info text-center mt-3"><h4>Usuarios</h4></div>

                   </div>
               </a>
               </div>


@endsection
