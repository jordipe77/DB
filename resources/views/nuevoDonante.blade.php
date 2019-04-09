@extends('templates.plantilla')

@section('titulo')
DATOS USUARIO
@endsection
<link rel="stylesheet" href="{{asset('css/donantes.css')}}">
@section('principal')

@include('partial.errores')


<div class="container-fluid">
        <div class="card mb-3 mt-4 " style="text-align: center">
        <div class="card-header">
            <h2>Nuevo Donante</h2>
        </div>


<div class="container-fluid">
    @php
   $boolNuevaDonacion = Session::get('nuevaDonacion');
    @endphp


    @if(isset($mibool))
        <div>Vengo de nueva donación..</div>
    @endif
    <div class="card mb-3 mt-4 " style="text-align: center">

        <div class="card-body">

        <form action="{{action('donanteController@store')}}" method="post" enctype="multipart/form-data">

            @csrf
                <p></p>

            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" autofocus placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="text" class="form-control" name="correo" id="correo" value="{{old('correo')}}" autofocus placeholder="Email">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" name="cif" id="cif" class="form-control" placeholder="CIF" value="{{old('cif')}}">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" value="{{old('telefono')}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe"></i></span>
                        </div>
                        <input type="text" class="form-control" name="pais" id="pais" value="{{old('pais')}}" autofocus placeholder="País">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-city"></i></span>
                        </div>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{old('direccion')}}" autofocus placeholder="Direccion">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-city"></i></span>
                        </div>
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
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-paw"></i></span>

                            </div>
                            <select class="form-control" name="tipo_donante" id="tipo_donante" value="">
                                <option value ="particular">Particular</option>
                                <option value= "empresa">Empresa</option>
                            </select>
                        </div>
                    </div>


            </div>



            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-child"></i></span>
                        </div>
                        <select class="form-control" name="sexos_id" id="sexos_id" value="{{old('sexos_id')}}">
                            <option value= "mujer">Mujer</option>
                            <option value= "hombre">Hombre</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-paw"></i></span>

                        </div>
                        <select class="form-control" name="tiene_animales" id="tiene_animales" value="{{old('tiene_animales')}}">
                            <option value ="si">Tiene animales</option>
                            <option value= "no">No tiene animales</option>
                        </select>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-info"></i></span>
                        </div>
                        <select class="form-control" name="spam" id="spam" value="">
                            <option value= "si">Permite recibir informacion de nuestra asociacion</option>
                            <option value= "no">NO permite recibir informacion de nuestra asociacion</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-info"></i></span>
                            </div>
                            <select class="form-control" name="es_colaborador" id="es_colaborador" value="">
                                <option value= "si">Es colaborador</option>
                                <option value= "no">NO es colaborador</option>
                            </select>
                        </div>
                    </div>
            </div>

            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                </div>
                <input type="text" class="form-control" name="vinculo_entidad" id="vinculo_entidad" value="{{old('vinculo_entidad')}}" autofocus placeholder="Vínculo con nuetra entidad">
            </div>

            <div class="form-group mt-3">
                <input type="submit" value="Registrar" class="btn aceptar">
            </div>
        </form>
    </div>
</div>

@endsection
