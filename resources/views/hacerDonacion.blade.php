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
            <form action="{{action('donacionController@store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                    <label for="tipo">TIPO</label>
                    <select class="form-control" name="tipo" id="tipo" required>
                      <option data-tipo="comida">COMIDA</option>
                      <option data-tipo="veterinaria">VETERINARIA</option>
                      <option>COMPLEMENTOS</option>
                      <option>MATERIAL</option>
                      <option>ECONÓMICO</option>
                      <option>OTROS</option>
                    </select>
            </div>


            <div class="form-group row">
                    <label for="tipo">SUBTIPO</label>
                    <select class="form-control" name="tipo" id="tipo" required>

                            <option>Pienso perro Gama Alta</option>
                            <option>Pienso perro Gamma Media</option>
                            <option>Pienso perro Gama Baja</option>
                            <option>Pienso perros Especial</option>
                            <option>Pienso gato</option>
                            <option>Pienso otros animales</option>
                            <option>Golosinas</option>
                            <option>Leche materna</option>
                            <option>Latas</option>

                            <option>Medicamentos</option>
                            <option>Instrumental</option>
                            <option>Aparatología</option>
                            <option>Fungibles   </option>

                            <option>Camas(ropa/plastico)</option>
                            <option>Juguetes</option>
                            <option>COMPLEMENTOS- Rascadores para gatos</option>
                            <option>Collares</option>
                            <option>Transportines</option>
                            <option>Morriones</option>
                            <option>Correas</option>
                            <option>Arneses</option>
                            <option>Abrigos</option>
                            <option>Mantas</option>
                            <option>Casitas</option>
                            <option>Comedores-Bols</option>
                            <option>Placas Identificativa</option>

                            <option>Electrodomesticos</option>
                            <option>Material informático</option>
                            <option>Limpieza</option>
                            <option>Material oficina</option>
                            <option>Móviles</option>
                            <option>Mobiliario</option>

                            <option>Aparatos electrónicos / electrodomésticos</option>
                            <option>Ropa de casa</option>
                            <option>Muebles</option>
                            <option>Ropa de vestir</option>
                            <option>Complementos para animales</option>
                            <option>Bolsos / Maletas</option>
                            <option>Complementos del hogar</option>
                            <option>Antiguedades</option>

                            <option>Padrinos</option>
                            <option>Socios</option>
                            <option>Crowd-founding</option>
                            <option>Cash</option>
                            <option>Teeming</option>

                    </select>
            </div>

            <div class="form-group row">
                    <label for="cantidad" class="col-sm-2 col-form-label">Unidades</label>
                        <div class="col-sm-10">
                            <input type="number" name="unidades" class="form-control form-group" min="1" required>
                        </div>
            </div>

            <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="Descripción del donativo seleccionado"></textarea>
                        </div>
            </div>

            <div class="form-group row">
                    <label for="centro_receptor" class="col-sm-2 col-form-label">Centro Receptor</label>

                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro1" value="option1" autofocus>
                            <label class="form-check-label" for="centro1">Refugi Cal Pilé</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro2" value="option2">
                            <label class="form-check-label" for="centro2">Refugi Can Moret</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro3" value="option3">
                            <label class="form-check-label" for="centro3">CCAAC Barcelonès</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro4" value="option4">
                            <label class="form-check-label" for="centro4">Espai Veterinari</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro5" value="option5">
                            <label class="form-check-label" for="centro5">Encants</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro6" value="option6">
                            <label class="form-check-label" for="centro6">Oficines</label>
                    </div>
            </div>

            <div class="form-group row">
                    <label for="centro_destino" class="col-sm-2 col-form-label">Centro Destinatario</label>

                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro1" value="option1" autofocus>
                            <label class="form-check-label" for="centro1">Refugi Cal Pilé</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro2" value="option2">
                            <label class="form-check-label" for="centro2">Refugi Can Moret</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro3" value="option3">
                            <label class="form-check-label" for="centro3">CCAAC Barcelonès</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro4" value="option4">
                            <label class="form-check-label" for="centro4">Espai Veterinari</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro5" value="option5">
                            <label class="form-check-label" for="centro5">Encants</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro" id="centro6" value="option6">
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
                                <input type="number" name="peso" class="form-control form-group" min="0" >
                        </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-2">
                        <button type="submit" class="btn btn-primary btn-sm" name="submit">CONFIRMAR</button>
                    <a href="{{url('/donacionUsuario')}}">
                        <button type="button" class="btn btn-secondary btn-sm">CANCELAR</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{asset('js/donaciones.js')}}"></script>


@endsection
