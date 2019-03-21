@extends('templates.plantilla')

@section('titulo')

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
                    <select class="form-control" name="tipo" id="tipo">
                      <option>COMIDA</option>
                      <option>VETERINARIA</option>
                      <option>COMPLEMENTOS</option>
                      <option>MATERIAL</option>
                      <option>ECONÓMICO</option>
                      <option>OTROS</option>
                    </select>
            </div>

           {{ $tipo = $store['tipo'] }};


            <div class="form-group row">
                    <label for="tipo">SUBTIPO</label>
                    <select class="form-control" name="tipo" id="tipo">
                        @if($tipo == 'COMIDA')
                            <option>COMIDA- Pienso perro Gama Alta</option>
                            <option>COMIDA- Pienso perro Gamma Media</option>
                            <option>COMIDA- Pienso perro Gama Baja</option>
                            <option>COMIDA- Pienso perros Especial</option>
                            <option>COMIDA- Pienso gato</option>
                            <option>COMIDA- Pienso otros animales</option>
                            <option>COMIDA- Golosinas</option>
                            <option>COMIDA- Leche materna</option>
                            <option>COMIDA- Latas</option>

                        @elseif($tipo == 'VETERINARIA')
                            <option>VETERINARIA- Medicamentos</option>
                            <option>VETERINARIA- Instrumental</option>
                            <option>VETERINARIA- Aparatología</option>
                            <option>VETERINARIA- Fungibles   </option>

                        @elseif($tipo == 'COMPLEMENTOS')
                            <option>COMPLEMENTOS- Camas(ropa/plastico)</option>
                            <option>COMPLEMENTOS- Juguetes</option>
                            <option>COMPLEMENTOS- Rascadores para gatos</option>
                            <option>COMPLEMENTOS- Collares</option>
                        <option>COMPLEMENTOS- Transportines</option>
                        <option>COMPLEMENTOS- Morriones</option>
                        <option>COMPLEMENTOS- Correas</option>
                        <option>COMPLEMENTOS- Arneses</option>
                        <option>COMPLEMENTOS- Abrigos</option>
                        <option>COMPLEMENTOS- Mantas</option>
                        <option>COMPLEMENTOS- Casitas</option>
                        <option>COMPLEMENTOS- Comedores-Bols</option>
                        <option>COMPLEMENTOS- Placas Identificativa</option>

                        @endif

                    </select>
            </div>





            <div class="form-group row">
                    <label for="cantidad" class="col-sm-2 col-form-label">Unidades</label>
                        <div class="col-sm-10">
                            <input type="number" name="unidades" class="form-control form-group" min="1">
                        </div>
            </div>

            <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="Descripción del donativo seleccionado"></textarea>
                        </div>
            </div>

            <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="Descripción del donativo seleccionado"></textarea>
                        </div>
            </div>

            <div class="form-group row">
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro1" id="centro1" value="option1">
                            <label class="form-check-label" for="centro1">Refugi Cal Pilé</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro1" id="centro2" value="option2">
                            <label class="form-check-label" for="centro2">Refugi Can Moret</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro1" id="centro3" value="option3">
                            <label class="form-check-label" for="centro3">CCAAC Barcelonès</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro4" id="centro4" value="option4">
                            <label class="form-check-label" for="centro4">Espai Veterinari</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro5" id="centro5" value="option5">
                            <label class="form-check-label" for="centro5">Encants</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="centro6" id="centro6" value="option6">
                            <label class="form-check-label" for="centro6">Oficines</label>
                    </div>

            </div>

            <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Peso</label>
                        <div class="col-sm-4">
                                <input type="number" name="peso" class="form-control form-group">
                        </div>

                    <label for="descripcion" class="col-sm-2 col-form-label">Coste</label>
                        <div class="col-sm-4">
                                <input type="number" name="coste" class="form-control form-group">
                        </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-2">
                        <button type="submit" class="btn btn-primary btn-sm" name="submit">CONFIRMAR</button>
                    <a href="index.php">
                        <button type="button" class="btn btn-secondary btn-sm">CANCELAR</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection
