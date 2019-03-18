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
                            <option selected>Comida</option>
                            <option>Veterinaria</option>
                            <option>Complementos</option>
                            <option>Material de oficina</option>
                            <option>Económica</option>
                            <option>Otros</option>
                        </select>
                    </div>
            </div>

            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" name="nom" placeholder="Nombre de la ciudad" max="50" class="form-control" id="nombre">
                    </div>
            </div>

            <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción del donativo seleccionado"></textarea>
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
