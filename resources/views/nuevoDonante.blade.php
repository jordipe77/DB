@extends('templates.plantilla')

@section('titulo')
DATOS USUARIO
@endsection
<link rel="stylesheet" href="{{asset('css/donantes.css')}}">
@section('principal')

<div class="container-fluid">
        <div class="card mb-3 mt-4 " style="text-align: center">
        <div class="card-header">
            <h2>Nuevo Donante</h2>
        </div>


<div class="container-fluid">
    @php
   $boolNuevaDonacion = Session::get('nuevaDonacion');
    @endphp
    <div class="card mb-3 mt-4 " style="text-align: center;background:white;">

        <div class="card-body" style="background:white;">

        <form action="{{action('donanteController@store')}}" method="post" enctype="multipart/form-data">

            @csrf
                <p></p>

            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" autofocus placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" name="correo" id="correo" value="{{old('correo')}}" autofocus placeholder="Email">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" name="cif" id="cif" class="form-control" placeholder="CIF" value="{{old('cif')}}">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" value="{{old('telefono')}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" name="pais" id="pais" value="{{old('pais')}}" autofocus placeholder="País">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{old('direccion')}}" autofocus placeholder="Direccion">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" name="poblacion" id="poblacion" value="{{old('poblacion')}}" autofocus placeholder="Población">
                    </div>
                </div>

                {{-- <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-info"></i></span>
                        </div>
                        <select class="form-control" name="es_habitual" id="es_habitual" value="{{old('es_habitual')}}" >
                            <option value= "si">Habitual</option>
                            <option value= "no">No habitual</option>
                        </select>
                    </div>
                </div> --}}
                <div class="col">
                        <div class="input-group form-group">
                            <select class="form-control" name="tipo_donante" id="tipo_donante" value="">
                                <option value ="1">Particular</option>
                                <option value= "2">Empresa</option>
                            </select>
                        </div>
                    </div>


            </div>



            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <select class="form-control" name="sexos_id" id="sexos_id" value="{{old('sexos_id')}}">
                            <option value= "1">Mujer</option>
                            <option value= "2">Hombre</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <select class="form-control" name="tiene_animales" id="tiene_animales" value="{{old('tiene_animales')}}">
                            <option value ="1">Tiene animales</option>
                            <option value= "0">No tiene animales</option>
                        </select>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <select class="form-control" name="spam" id="spam" value="">
                            <option value= "1">Permite recibir informacion de nuestra asociacion</option>
                            <option value= "0">NO permite recibir informacion de nuestra asociacion</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                        <div class="input-group form-group">
                            <select class="form-control" name="es_colaborador" id="es_colaborador" value="">
                                <option value= "1">Es colaborador</option>
                                <option value= "0">NO es colaborador</option>
                            </select>
                        </div>
                    </div>
            </div>

            <div class="input-group form-group">
                <input type="text" class="form-control" name="vinculo_entidad" id="vinculo_entidad" value="{{old('vinculo_entidad')}}" autofocus placeholder="Vínculo con nuetra entidad">
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-success" type="submit" id="confirmar">Registrar</button>
            </div>
        </form>
    </div>
</div>

@endsection
