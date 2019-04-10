@extends('templates.plantilla')

@section('titulo')
ADMIN MODE
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/ADMIN.css')}}">

@section('principal')

<div class="container" id="tot">
    <form action="" method="post">
            <h2>OPCIONES DE ADMINISTRADOR</h2>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">

                    <div class="card-group">
                            <a href="{{url('/buscarUsuario')}}">
                        <div class="card carta">
                           <button type="button" class="btn bot" id="boton1" name="boton1"><strong>USUARIO</strong></button>

                        </div>
                    </a>
                    <a href="{{url('/buscarDonante')}}">
                        <div class="card carta">
                            <button type="button" class="btn bot" id="boton2" name="boton2"><strong>DONANTE</strong></button>
                        </div>
                    </a>
                    <a href="{{url('/buscarDonacion')}}">
                        <div class="card carta">
                            <button type="button" class="btn bot" id="boton4" name="boton4"><strong>DONACIÓN</strong></button>
                         </div>
                    </a>
                </div>
                <div class="col-3">
                    </div>
        </div>
    </div>
    </form>
</div>


@endsection

