@extends('templates.plantilla')

@section('titulo')
DONACION
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('css/hacerDonaciones.css')}}">
@section('principal')

      <div class="modal fade" id="modalBuscar" role="dialog">
            <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                            <h5>Buscar por Nombre, CIF o teléfono</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                      <h5 class="text-center"><input type="text" id="busquedadonante" name="buscDonante">
                        <button type="button" id="btnBusDonante" name="editar" class="btn btn-info">Buscar</button>      
                    </h5>
                      <table class="table table-striped friendsoptionstable" id="tabla-donantes">
                        <thead id="tblHead">
                          <tr>
                                <th>Nombre</th>
                                <th>CIF</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Selección</th>
                          </tr>
                        </thead>
                        <tbody id="tbody-donantes">
                        </tbody>
                      </table>
                    </div>
                            
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
<div class="container-fluid">
    <div class="card mb-3 mt-4">
        <div class="card-header text-white bg-primary mb-3">
            NUEVA DONACIÓN
        </div>
    <div class="card-body">
            <form action="{{action('introDonativoController@store')}}" method="POST">
            @csrf
            <div class="form-group row" id="anonimodiv">
                    <div class="col-2">
                            <label for="donante" class="">Donante Anonimo</label>
                        </div>

                            <div class="col-10 ">
                            <span><input type="radio" name="anonimo" value="1">Si</span>

                            <span class="ml-2"><input type="radio" name="anonimo" value="2">No</span>
                          </div>
            </div>
                <div class="form-group row" id="donante">
                    <label for="donante" class="col-sm-2 col-form-label">Donante</label>
                        <div class="col-sm-4">

                        <input type="text" name="donante" class="form-control form-group" readonly placeholder="Ningun donante seleccionado">
                        <input type="hidden" name="id-donante" class="form-control form-group">
                        </div>
                        <div class="col-sm-auto">
                            <button type="button" name="buscar" class="btn btn-info" data-toggle="modal" data-target="#modalBuscar">Buscar</button>
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
                    <div class="form-check form-check-inline ml-3">
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
                    <div class="form-check form-check-inline ml-3">
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
                        <button type="submit" id="confirmar" class="btn btn-primary btn-sm">CONFIRMAR</button>
                        <button type="button" class="btn btn-secondary btn-sm">CANCELAR</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/hacerDonaciones.js"> </script>


@endsection
