@extends('templates.plantilla')

@section('titulo')

@endsection

@section('principal')

<div class="card mt-3">
    <div class="card-header">
        Lista de usurarios
    </div>
    <div class="card-body">


      <table class="table table-striped table-hover mt-5">
          <thead>
              <tr>
                  <th>nombre</th>
                  <th>email</th>

              </tr>
          </thead>
          <tbody>

            <tr>
                <td>{{$usuarios->nombre_usuario}}</td>
                <td>{{$usuarios->correo}}</td>


            </tr>


          </tbody>
      </table>


    </div>

</div>

@endsection
