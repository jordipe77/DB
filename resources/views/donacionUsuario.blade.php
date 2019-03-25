@extends('templates.plantilla')

@section('titulo')
DATOS USUARIO
@endsection

@section('principal')

<div class="container-fluid">
        <div class="card mb-3 mt-4 " style="text-align: center">
            <h2>Datos del Usuario</h2>

</div>

<div class="container-fluid">
    <div class="card mb-3 mt-4 " style="text-align: center">
        <h4>Donante Registrado</h4>
        <div class="card-body">
            <form action="{{action('donacionController@store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <p>Completa uno de los siguentes campos para acceder a los datos del donante.</p>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="text" class="form-control" name="correo" id="correo" value="{{old('correo')}}" autofocus placeholder="Email">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="dni" id="dni" class="form-control" placeholder="DNI" value="{{old('dni')}}">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" value="{{old('telefono')}}">
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Acceder" class="btn aceptar">
                </div>
        </form>
    </div>
</div>




<div class="container-fluid">
    <div class="card mb-3 mt-4 " style="text-align: center">
        <h4>Nuevo donante</h4>
        <div class="card-body">
            <form action="{{action('donacionController@store')}}" method="post" enctype="multipart/form-data">
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
                        <input type="text" name="dni" id="dni" class="form-control" placeholder="DNI" value="{{old('dni')}}">
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
                        <input type="text" class="form-control" name="poblacion" id="poblacion" value="{{old('poblacion')}}" autofocus placeholder="Población">
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
                            <option>Mujer</option>
                            <option>Hombre</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-paw"></i></span>
                        </div>
                        <select class="form-control" name="tiene_animales" id="tiene_animales" value="{{old('tiene_animales')}}">
                            <option>No</option>
                            <option>Si</option>
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



<div class="container-fluid">
    <div class="card mb-3 mt-4 " style="text-align: center">
        <h4>Donante anónimo</h4>
        <div class="card-body">
            <form action="{{action('donacionController@store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <p></p>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="anonimo">
                    <label class="form-check-label" for="anonimo">Acceder como donante Anónimo</label>
                  </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Acceder" class="btn aceptar">
                </div>
        </form>
    </div>
</div>


@endsection

