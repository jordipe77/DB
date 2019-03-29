@extends('templates.plantilla')

@section('titulo')
ADMIN MODE
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/ADMIN.css')}}">

@section('principal')

<div class="container full-background" id="tot">
    <form action="" method="post">
        <h2>OPCIONES DE ADMINISTRADOR</h2>

    <div class="card-group mt-5">
            <a href="{{url('/registro')}}">
        <div class="card mr-2 carta">

           <button type="button" class="btn bot" id="boton1" name="boton1"><strong>ALTA USUARIO</strong></button>

        </div>
    </a>
    <a href="{{url('/editUsuario')}}">
        <div class="card mr-2 carta">
            <button type="button" class="btn bot" id="boton2" name="boton2"><strong>MODIFICAR USUARIO</strong></button>
        </div>
    </a>

        <div class="card mr-2 carta">
            <button type="button" class="btn bot" id="boton4" name="boton4"><strong>BAJA USUARIO</strong></button>
         </div>
    </div>
    </form>
</div>

@endsection

