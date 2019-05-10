@extends('templates.plantilla')

@section('titulo')
Bienvenido!
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">
<link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
@section('principal')
<h1 style="title" class="mish2"> Bienvenido/a a la plataforma de gestión de SPAM</h1>

<div class="row">
        <div class="col-2"></div>
    <div class="col-8">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style=" width:100%; height: 200px !important;">
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
</div>
<div class="col-2"></div>
</div>

<div class="row" style="margin-top:7em;">
    <div class="col-1"> </div>
  <div class="col-6">
        <div class="card h-25">
                <div class="card-header text-white">
                        <h3>Como funciona la plataforma?</h3>
                </div>
                <div class="card-body">
                        <p>Desde esta plataforma nuestros voluntarios y voluntarias gestionan las donaciones que nos llegan, optimizando la gestión y ordenandolas para que nos sea más facil que todo llegue cuanto antes a nuestros animales.</p> Para aportar cualquier tipo de donación ponte en contacto con nosotros o con cualquiera de nuestros voluntarios des de <a href="mailto:info@protectoramataro.org.">info@protectoramataro.org</a>.
                        Servicios Centrales: <br/>
                        Calle Sant Cugat 102-104, Mataró 08302 (Barcelona). Tel. 937566066-647972293
                    </div>
              </div>   
  </div>
  <div class="col-4">
        <div class="card h-25">
    <div class="card-header text-white">
          <h3>Adopta un GPP</h3>
    </div>
    <div class="card-body">
        <p> Los perros de estas razas lo tienen muy difícil para ser adoptados. Llevan una etiqueta que hace que mucha gente los rechace sin conocerlos. Si estáis pensando en adoptar, no los descartéis: son perros fantásticos que también han sido abandonados y necesitan una familia. Más información <a href="https://www.protectoramataro.org/ca/adopta-gpp" target="blank"> aquí</a></p>
    </div>
        </div>      
</div>
<div class="col-1"></div>

</div>
<div class="row">
  <div class="col-2">

  </div>
  <div class="col-8 mt-4">
      <h1 class="text-center text-white mb-4">¿Cómo puedes ayudar?</h1>
      <div class="video-enlaces text-center mb-4">
      <a class="btn btn-primary" data-comienzo="15" data-final="30" id="intro" href="#" role="button">SOBRE SPAM</a>
      <a class="btn btn-secondary" data-comienzo="60" data-final="125" id="adopcion" href="#" role="button">ADOPCIÓN</a>
      <a class="btn btn-success" data-comienzo="200" data-final="220" id="donacion" href="#" role="button">DONACIONES</a>
      <a class="btn btn-danger" data-comienzo="250" data-final="300" id="voluntario" href="#" role="button">VOLUNTARIOS</a>
      <a class="btn btn-info" data-comienzo="310" data-final="350" id="todo" href="#" role="button">TODO EL VIDEO</a>
      </div>
      <div id="video" class="d-flex justify-content-center">         
          <video controls  crossorigin="anonymous" id="miVideo"class="embed-responsive" width="1280" height="720"  type="video/mp4">
              <source src="{{url('videos/spamVideo.mp4')}}">
                  Your browser do not support HTML5 video.
                </video>
      </div>
  </div>
  <div class="col-2">

  </div>
</div>
<div class="row" style="margin-bottom:2em;margin-top:3em;">                   
        <div class="col-12">
                <div class="card"> 
                <div class="card-header text-white"><h3>Estadísticas </h3></div>
                <div class="card-body">
      <div id="piechart_3d" style="height: 15em;"></div>
      <div id="columnchart_3d" style="height: 20em;margin-top:1em;"></div>
                </div>
        </div>
    </div>
 </div>

          <script src="{{ asset('js/dashboard.js') }}"></script>
          <script src="{{asset('js/videoInteractivo.js')}}"> </script>
          <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
          <link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                              ['Refugi Cal Pilé',{{$sumaCentro1}}],
                              ['Refugi Can Moret',{{$sumaCentro2}}],
                              ['CCAAC Barcelonès',{{$sumaCentro3}}],
                              ['Espai Veterinari',{{$sumaCentro4}}],
                              ['Encants',{{$sumaCentro5}}],
                              ['Oficines',{{$sumaCentro6}}],
              ]);
              var data2 = google.visualization.arrayToDataTable([
                        ['', '', { role: 'style' }],
                        ['Comida', 2, '#b87333'],            
                        ['Veterinaria', 3, 'silver'],           
                        ['Complementos', 5, 'gold'],
                        ['Material', 2, 'color: #e5e4e2' ], 
                        ['Otros', 2, 'color: #e5e4e2' ], 
                        ['Ecónomico', 2, 'color: #e5e4e2' ], 
            ]);
              
              var options = {
                title: 'Recaudación por Centro',
                is3D: true,
              };
              var options2 = {
                title: 'Cantidad de donaciones por tipo de categoria',
                is3D: true,
              };
              var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
              var chart2 = new google.visualization.ColumnChart(document.getElementById('columnchart_3d'));
              chart.draw(data, options); 
              chart2.draw(data2, options2);     
              //-----
      
            }
         
      
          </script>   
@endsection

