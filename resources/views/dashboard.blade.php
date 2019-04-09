@extends('templates.plantilla')

@section('titulo')
Dashboard
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

@section('principal')
<div class="wrapper mt-2" style="height:200px">
<h2> BENVINGUT A LA PLATAFORMA DE GESTIÓ DE LA SPAM </h2>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row">
  <div class="col-sm-3">Div1</div>
  <div class="col-sm-6">Div2</div>
  <div>Div3</div>
</div>
</div>
          <script src="{{ asset('js/dashboard.js') }}"></script>
          <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
@endsection

