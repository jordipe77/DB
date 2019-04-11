@extends('templates.plantilla')

@section('titulo')
Bienvenido!
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">

@section('principal')
<h2 style="title" class="mish2"> BIENVENIDO A LA PLATAFORMA DE GESTIÓN DE LA SPAM </h2>

<div class="wrapper" style="height:200px">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="{{asset('imgs/banner1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('imgs/banner2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('imgs/banner3.jpg')}}" alt="Third slide">
    </div>
  </div>

</div>

<div class="row mt-4">
<div class="col-2">
    <div class="d-flex justify-content-center" id="link">
        <a href="https://www.protectoramataro.org/es" target="blank">
            <img src="{{asset('imgs/spam_link.png')}}">
        </a>
    </div>

</div>
  <div class="col-7">
    <div class="card-header">
        <h3>Como funciona la plataforma?</h3>
    </div>
      <div class="card-body">
          <p>Desde esta plataforma nuestros voluntarios y voluntarias gestionan las donaciones que nos llegan, optimizando la gestión y ordenandolas para que nos sea más facil que todo llegue cuanto antes a nuestros animales.</p> Para aportar cualquier tipo de donación ponte en contacto con nosotros o con cualquiera de nuestros voluntarios des de <a href="mailto:info@protectoramataro.org.">info@protectoramataro.org</a>.
      </div>
      <div class="card-body" id="info_contacto">

            Servicios Centrales: <br/>
            Calle Sant Cugat 102-104, Mataró 08302 (Barcelona). Tel. 937566066-647972293
      </div>
  </div>
  <div class="col-3">
    <div class="card-header">
          <h4>Adopta un GPP</h4>
    </div>
    <div class="card-body">
        <p> Los perros de estas razas lo tienen muy difícil para ser adoptados. Llevan una etiqueta que hace que mucha gente los rechace sin conocerlos. Si estáis pensando en adoptar, no los descartéis: son perros fantásticos que también han sido abandonados y necesitan una familia. Más información <a href="https://www.protectoramataro.org/ca/adopta-gpp" target="blank"> aquí</a></p>
    </div>
</div>

</div>
</div>
          <script src="{{ asset('js/dashboard.js') }}"></script>
          <link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">
@endsection

