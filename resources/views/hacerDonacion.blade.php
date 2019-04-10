@extends('templates.plantilla')

@section('titulo')
DONACION
@endsection

@section('principal')
<<<<<<< HEAD
=======
        {{-- MODAL NUEVO--}}
        <div class="modal fade" id="modalNuevo" role="dialog">
            <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                            <h5>Crear nuevo Donante</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{action('donanteController@store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="modalExists" value="1">
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

                                <div class="col">

                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-info"></i></span>
                                        </div>
                                        <select class="form-control" name="es_habitual" id="es_habitual" value="{{old('es_habitual')}}" >
                                            <option value= "si">Habitual</option>
                                            <option value= "no">No habitual</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-paw"></i></span>

                                            </div>
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
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-child"></i></span>
                                        </div>
                                        <select class="form-control" name="sexos_id" id="sexos_id" value="{{old('sexos_id')}}">
                                            <option value= "1">Mujer</option>
                                            <option value= "2">Hombre</option>
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
                            </div>
                            <div class="row">
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

                            <div class="form-group mt-3 offset-5">
                                <button type="submit" id="btnBusDonante" name="editar" class="btn btn-info">Registrar</button>
                            </div>
                        </form>
                    </div>
>>>>>>> master


<div class="container-fluid">
    <div class="card mb-3 mt-4">
        <div class="card-header text-white bg-primary mb-3 " >
            NUEVA DONACIÓN
        </div>
    <div class="card-body">
            <form action="{{action('introDonativoController@store')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group row" id="anonimodiv">
                    <div class="col-2">
                            <label for="donante" class="">Donante Anonimo</label>
                        </div>

                            <div class="col-10 ">
                            <label><input type="radio" name="anonimo" value="1">Si</label>

                            <label><input type="radio" name="anonimo" value="2">No</label>
                          </div>

            </div>



                <div class="form-group row" id="donante">
                    <label for="donante" class="col-sm-2 col-form-label">Donante</label>
                        <div class="col-sm-4">

                        <input type="text" name="donante" class="form-control form-group" placeholder="" value="">

                        </div>
                        <div class="col-sm-auto">
                        <form action="" method="get">
                            <button type="button" name="editar" class="btn btn-info" data-toggle="modal" data-target="#modalBuscar">Buscar</button>
                        </form>
                    </div>
                    <div class="col-sm-auto">
                    <form action="{{action('introDonativoController@enviar')}}" method="get">
                            <button type="submit" name="editar" class="btn btn-success">Nuevo</button>
                        </form>
                    </div>

            </div>



            <div class="form-group row">

                <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                    <div  class="col-sm-10">
                    <select class="form-control" name="tipo" id="tipo" required>
                        @foreach($tipo_list as $tipo)
                        {{-- @if(strlen($tipo->nombre)>0) --}}
                        <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                            {{-- @endif --}}
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="form-group row" id="menuSubTipos">
                    <label for="tipo" class="col-sm-2 col-form-label">Subtipo</label>
                    <div  class="col-sm-10">
                    <select class="form-control" name="subtipo" id="subtipo" required>
                            {{-- se llenan con api mediante Ajax en hacerdonacion.js--}}
                    </select>
                </div>
            </div>
            <div class="form-group row">
                    <label for="cantidad" class="col-sm-2 col-form-label">Unidades</label>
                        <div class="col-sm-10">
                            <input type="number" name="unidades" class="form-control form-group" min="1" required>
                        </div>
            </div>



            <div class="form-group row">
                    <label for="centro_receptor" name="centro_receptor" class="col-sm-2 col-form-label">Centro Receptor</label>
                    @foreach($centros as $centro)
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="centro_receptor" id="{{$centro->id}}" value="{{$centro->id}}" autofocus>
                    <label class="form-check-label" for="centro1">{{$centro->nombre}}</label>
                    </div>
                    @endforeach

            </div>
            <div class="form-group row">
                    <label for="centro_receptor_altres" class="col-sm-2 col-form-label">Otro Centro</label>
                        <div class="col-sm-4">
                            <input type="text" name="centro_receptor_altres" class="form-control form-group">
                        </div>
            </div>

            <div class="form-group row">
                    <label for="centro_desti" name="centro_desti" class="col-sm-2 col-form-label">Centro Destino</label>
                    @foreach($centros as $centro)
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="centro_desti" id="{{$centro->id}}" value="{{$centro->id}}" autofocus>
                    <label class="form-check-label" for="centro1">{{$centro->nombre}}</label>
                    </div>
                    @endforeach

            </div>

            <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Peso</label>
                        <div class="col-sm-4">
                                <input type="number" name="peso" class="form-control form-group" min="0">
                        </div>

                    <label for="descripcion" class="col-sm-2 col-form-label">Coste</label>
                        <div class="col-sm-4">
                                <input type="number" name="coste" class="form-control form-group" min="0">
                        </div>
            </div>

            <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Factura</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="hay_factura" id="hay_factura" value="{{old('hay_factura')}}" >
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>
            </div>

            <div class="form-group row">
                    <label for="comment">Descripción</label>
                    <div class="col-sm-10 offset-2">

                        <textarea class="form-control" rows="3" id="desc_animal" name="desc_animal"></textarea>
                  </div>
                </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-2">
                        <button type="submit" id="sumbmit" class="btn btn-primary btn-sm" name="submit">CONFIRMAR</button>
                    <a href="{{url('/dashboard')}}">
                        <button type="button" class="btn btn-secondary btn-sm">CANCELAR</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
 <!-- Modal -->
 <div class="modal fade" id="modalBuscar" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                    {{-- <form action="{{action('introDonativoController@show', [$donante->id])}}" method="get"> --}}
                        <input type="text" name="busquedadonante">
                        <button type="submit" name="editar" class="btn btn-info">EDITAR</button>
                        </form>
                    <table clas="table table-striped table-hover mt-5">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>CIF</th>
                                    <th>Telefono</th>
                                    <th>Población</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($donantes as $donante)
                                <tr>
                                    <td>{{$donante->nombre}}</td>
                                    <td>{{$donante->cif}}</td>
                                    <td>{{$donante->telefono}}</td>
                                    <td>{{$donante->poblacion}}</td>
                                    <td class="col-button">
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
            </div>
          </div>

        </div>
      </div>

<script type="text/javascript" src="js/hacerDonaciones.js"> </script>


@endsection
