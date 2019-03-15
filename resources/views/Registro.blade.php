@extends('templates.plantilla')
@section('titulo','Registro')
@section('principal')
<div class="container">
  <h2 class="text-center text-white mt-4">Registro Usuarios</h2>
    <div class="row">
      <div class="col-3 w-100"> </div>
      <div class="col-6 w-100 text-white">
          <form>
              @csrf
          <div class="form-row">
              <div class="form-group col-md-12">
                  <label for="inputEmail4">Nombre y apellidos</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Ej: Pedro Mart�nez">
                </div>
          </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Ej: MarcG">
                  </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Ej: dani@gmail.com" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Contrase�a">
              </div>
              <div class="form-group col-md-6">
                  <label for="inputPassword4">Confirmar Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Conf. Contrase�a">
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Ciudad</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Ej: Matar�">
              </div>
              <div class="form-group col-md-6">
                  <label for="inputCity">Provincia</label>
                  <input type="text" class="form-control" id="inputCity" placeholder="Ej: Barcelona">
                </div>
      </div>
      <div class="w-100">
      <button type="submit" class="btn btn-block btn-primary btn-success">Registrar Usuario</button>
      </div>
          </form>
      </div>
      <div class="col-3 w-100">  </div>
    </div>

    </div>
@endsection

