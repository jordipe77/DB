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
            <form action="{{action('donativoController@store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">

                <label for="tipo">DONANTE</label>
                <select class="form-control" name="tipo_donante" id="tipo_donante" required>
                    <option value= "3">Anónimo</option>
                    <option value= "1">Particular</option>
                    <option value= "2">Empresa</option>
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

                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_receptor" id="centro1" value="option1" autofocus>
                            <label class="form-check-label" for="centro1">Refugi Cal Pilé</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_receptor" id="centro2" value="option2">
                            <label class="form-check-label" for="centro2">Refugi Can Moret</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_receptor" id="centro3" value="option3">
                            <label class="form-check-label" for="centro3">CCAAC Barcelonès</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_receptor" id="centro4" value="option4">
                            <label class="form-check-label" for="centro4">Espai Veterinari</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_receptor" id="centro5" value="option5">
                            <label class="form-check-label" for="centro5">Encants</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_receptor" id="centro6" value="option6">
                            <label class="form-check-label" for="centro6">Oficines</label>
                    </div>
            </div>

            <div class="form-group row">
                    <label for="centro_destino" name="centro_destino" class="col-sm-2 col-form-label">Centro Destinatario</label>

                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_destino" id="centro1" value="option1" autofocus>
                            <label class="form-check-label" for="centro1">Refugi Cal Pilé</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_destino" id="centro2" value="option2">
                            <label class="form-check-label" for="centro2">Refugi Can Moret</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_destino" id="centro3" value="option3">
                            <label class="form-check-label" for="centro3">CCAAC Barcelonès</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_destino" id="centro4" value="option4">
                            <label class="form-check-label" for="centro4">Espai Veterinari</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_destino" id="centro5" value="option5">
                            <label class="form-check-label" for="centro5">Encants</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro_destino" id="centro6" value="option6">
                            <label class="form-check-label" for="centro6">Oficines</label>
                    </div>
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
                        <select class="form-control" name="factura" id="factura" value="{{old('es_habitual')}}" >
                            <option value= "si">Si</option>
                            <option value= "no">No</option>
                        </select>
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
