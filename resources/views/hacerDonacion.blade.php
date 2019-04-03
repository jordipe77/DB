@extends('templates.plantilla')

@section('titulo')
DONACION
@endsection

@section('principal')


<div class="container-fluid">
    <div class="card mb-3 mt-4">
        <div class="card-header text-white bg-primary mb-3 " >
            NUEVA DONACIÓN
        </div>
    <div class="card-body">
            <form action="{{action('introDonativoController@store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">

                <label for="tipo">DONANTE</label>
                <select class="form-control" name="tipos_donantes" id="tipos_donantes" required>
                    @foreach($tipos_donantes as $tipo_donante )
                <option value= "{{$tipo_donante->id}}">{{$tipo_donante->tipo}}</option>
                    @endforeach

                </select>
        </div>

            <div class="form-group row">

                    <label for="tipo">TIPO</label>
                    <select class="form-control" name="tipo" id="tipo" required>
                        @foreach($tipo_list as $tipo)
                        {{-- @if(strlen($tipo->nombre)>0) --}}
                        <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                            {{-- @endif --}}
                        @endforeach

                    </select>
            </div>

            <div class="form-group row" id="menuSubTipos">
                    <label for="tipo">SUBTIPO</label>
                    <select class="form-control" name="subtipo" id="subtipo" required>
                            {{-- se llenan con api mediante Ajax en hacerdonacion.js--}}
                    </select>
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
<script type="text/javascript" src="js/hacerDonaciones.js"> </script>


@endsection
