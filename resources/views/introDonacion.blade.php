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
        <form action="ciudadController.php" method="post">
            <div class="form-group row">
                <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                    <div class="col-sm-10">
                        <select id="tipo" class="form-control">
                            <optgroup label="COMIDA">
                                    <option>COMIDA- Pienso perro Gama Alta</option>
                                    <option>COMIDA- Pienso perro Gamma Media</option>
                                    <option>COMIDA- Pienso perro Gama Baja</option>
                                    <option>COMIDA- Pienso perros Especial</option>
                                    <option>COMIDA- Pienso gato</option>
                                    <option>COMIDA- Pienso otros animales</option>
                                    <option>COMIDA- Golosinas</option>
                                    <option>COMIDA- Leche materna</option>
                                    <option>COMIDA- Latas</option>
                            </optgroup>
                            <optgroup label="VETERINARIA">
                                    <option>VETERINARIA- Medicamentos</option>
                                    <option>VETERINARIA- Instrumental</option>
                                    <option>VETERINARIA- Aparatología</option>
                                    <option>VETERINARIA- Fungibles   </option>
                            </optgroup>
                            <optgroup label="COMPLEMENTOS">
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
                            </optgroup>
                            <optgroup label="OFICINA">
                                    <option>MATERIAL- Electrodomésticos</option>
                                    <option>MATERIAL- Material informático</option>
                                    <option>MATERIAL- Limpieza</option>
                                    <option>MATERIAL- Material de oficina</option>
                                    <option>MATERIAL- Móviles</option>
                                    <option>MATERIAL- Mobiliario</option>
                            </optgroup>
                            <optgroup label="ECONÓMICO">
                                    <option>ECONÓMICO- Apadrinamiento</option>
                                    <option>ECONÓMICO- Socios</option>
                                    <option>ECONÓMICO- Cash</option>
                                    <option>ECONÓMICO- Teeming</option>
                                    <option>ECONÓMICO- Crowd-founding</option>

                            </optgroup>
                            <optgroup label="OTROS">
                                    <option>OTROS- Aparatos electrónico / Electrodomésticos</option>
                                    <option>OTROS- Ropa de casa</option>
                                    <option>OTROS- Muebles</option>
                                    <option>OTROS- Complementos para animales</option>
                                    <option>OTROS- Bolsos / Maletas</option>
                                    <option>OTROS- Complementos del hogar</option>
                                    <option>OTROS- Antigüedades</option>
+                            </optgroup>
                        </select>
                    </div>
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
                    <a href="ciudades.php">
                        <button type="button" class="btn btn-secondary btn-sm">CANCELAR</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection
