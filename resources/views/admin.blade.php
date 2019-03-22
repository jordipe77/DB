@extends('templates.plantilla')

@section('titulo')
ADMIN MODE
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/ADMIN.css')}}">

@section('principal')


<div class="container full-background" id="tot">
    <form action="/ProyectoABP/Controller.php" method="post">
    <div class="card-group">
        <div class="card mr-2 carta">
           <button type="button" class="btn bot" id="boton1" name="boton1"><strong>DAR DE BAJA</strong></button>
        </div>
        <div class="card mr-2 carta">
            <button type="button" class="btn bot" id="boton2" name="boton2"><strong>MODIFICAR USUARIO</strong></button>
        </div>
        <div class="card carta">
            <button type="button" class="btn bot" id="boton3" name="boton3"><strong>INTRODUCIR DONACION</strong></button>
        </div>
    </div>
    </form>
</div>

@endsection

