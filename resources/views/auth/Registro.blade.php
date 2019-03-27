@extends('templates.plantilla')
@section('titulo','Registro')
@section('principal')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
        @include('partial.errores')

  <h2 class="text-center text mt-4">Registro Usuarios</h2>
    <div class="row">
      <div class="col-3 w-100"> </div>
      <div class="col-6 w-100">
            <form action="{{action('Auth\RegisterController@registro')}}" method="post">
              @csrf
          <div class="form-row">
              <div class="form-group col-md-12">
                  <label for="inputEmail4">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="" required>
                </div>
          </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre de Usuario</label>
                    <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" value="{{old('nombre_usuario')}}" placeholder="">
                  </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="correo" id="correo" value="{{old('correo')}}" placeholder="" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" name="password" id="password" class="form-control" confirmed placeholder="">
              </div>
              <div class="form-group col-md-6">
                  <label for="inputPassword4">Confirmar Password</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  placeholder="">
                </div>
            </div>

      <div class="w-100">
      <button type="submit" class="btn btn-block btn-primary btn-success">Registrarse</button>
      </div>
     </form>
      </div>

    </div>

    </div>
@endsection

