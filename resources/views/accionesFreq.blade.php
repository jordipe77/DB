@extends('templates.plantilla')

@section('titulo')
Acciones Frequentes
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

@section('principal')

<div class="jumbotron" >

        <div class="row w-100">
             <a href="{{url('/buscarUsuario')}}">
                <div class="col-md-4">

                    <div class="card border-info mx-sm-1 p-3">
                        <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-user" aria-hidden="true"></span></div>
                        <div class="text-info text-center mt-3"><h4>Usuarios</h4></div>

                    </div>
                </a>
                </div>
                <a href="{{url('/buscarDonante')}}">
                <div class="col-md-4">
                    <div class="card border-success mx-sm-1 p-3">
                        <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-people-carry" aria-hidden="true"></span></div>
                        <div class="text-success text-center mt-3"><h4>Donantes</h4></div>

                    </div>
                </a>
                </div>
                <a href="{{url('/buscarDonacion')}}">
                <div class="col-md-4">
                    <div class="card border-dark mx-sm-1 p-3">
                        <div class="card border-dark shadow text-dark p-3 my-card" ><span class="fa fa-box-open" aria-hidden="true"></span></div>
                        <div class="text-dark text-center mt-3"><h4>Donaciones</h4></div>

                    </div>
                </a>
                </div>

             </div>
        </div>
          <script src="{{ asset('js/dashboard.js') }}"></script>
          <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
@endsection

