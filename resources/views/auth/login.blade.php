@extends('templates.plantillasin')

@section('titulo','LOGIN')

<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/todosin.css')}}">


@section('principal')

<div class="container mt-5">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>INICIAR SESIÓN</h3>
            </div>
            <div class="card-body">
                    <form action="{{action('Auth\Logincontroller@login')}}" method="post">

                    @csrf

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="correo" id="correo" value="{{old('correo')}}" autofocus placeholder="Email">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="{{old('contrasenya')}}">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Recordar usuario
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" value="Aceptar" class="btn float-right aceptar">
                        <a class="btn btn-secondary" href="{{url('/dashboard')}}" role="button">CANCELAR</a>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    No tienes cuenta?<a href="#">Registrate</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Has olvidado la constraseña?</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

