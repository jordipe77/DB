@extends('templates.plantilla')
@section('titulo','Registro')
@section('principal')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
        @include('partial.errores')
    <div class="card">
        <div class="card-header">
            <h2 class="text-center text mt-4">REGISTRO USUARIOS</h2>
        </div>
        <div class="card-body">
    <div class="row">
      <div class="col-2 w-200"> </div>
      <div class="col-8 w-200">
            <form action="{{action('Auth\RegisterController@registro')}}" method="post">
              @csrf
          <div class="form-row">
              <div class="form-group col-md-12">
              <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Nombre" required>
                </div>
          </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" value="{{old('nombre_usuario')}}" placeholder="Nombre de Usuario">
                  </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="correo" id="correo" value="{{old('correo')}}" placeholder="Email" required>
              </div>
              <div class="form-group col-md-6">
                <input type="password" name="password" id="password" class="form-control" confirmed placeholder="Password" required>
              </div>
              <div class="form-group col-md-6">
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  placeholder="Confirmar Password" required>

                </div>
            </div>

      <div class="w-100">
      <button type="submit" class="btn btn-block btn-primary btn-success">Registrarse</button>
      </div>
     </form>
      </div>
    </div>
    </div>
</div>
    </div>
@endsection

