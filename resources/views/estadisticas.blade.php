@extends('templates.plantilla')
@section('titulo')
Estadisticas
@endsection
@section('principal')
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
    <div class="row">
      <div class="col-6">
    <div id="piechart_3d" style="height: 500px;"></div>
      </div>
      <div class="col-6">
    <div id="columnchart_3d" style="height: 500px;"></div>
      </div>
    </div>
@endsection