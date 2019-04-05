@extends('templates.plantilla')
@section('titulo','Editar Usuario')
@section('principal')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
        @include('partial.errores')

  <h2 class="text-center text mt-4">Editar Usuario</h2>
    <div class="row">
      <div class="col-3 w-100"> </div>
      <div class="col-6 w-100">
            <form action="{{action('UsuarioController@update', [$usuario->id] )}}" method="post">
              @method('put')
              @csrf


          <div class="form-row">
              <div class="form-group col-md-12">
                  <label for="">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" value="{{$usuario->nombre}}" aria-describedby="helpId">
                </div>
          </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre de Usuario</label>
                    <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" value="{{$usuario->nombre_usuario}}" placeholder="">
                  </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="correo" id="correo" value="{{$usuario->correo}}" placeholder="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" name="password" id="password" class="form-control" confirmed placeholder="" required>
              </div>
              <div class="form-group col-md-6">
                  <label for="inputPassword4">Confirmar Password</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  placeholder="" required>
                </div>
            </div>

      <div class="w-100">
      <button type="submit" class="btn btn-block btn-primary btn-success">Modificar</button>
      </div>
     </form>
      </div>

    </div>

    </div>

@endsection
