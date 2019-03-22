@extends('templates.plantilla')

@section('titulo')
Dashboard
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

@section('principal')
    <div class="donativos" style="width:20%; border:1px solid red;" >
dasdas
    </div>
    <div class="donantes" style="width:20%; border:1px solid red;" >
dasdas
    </div>
    <div class="centros" style="width:20%; border:1px solid red;" >
asddas
    </div>
    <div class="RecaudadoAno" style="width:20%; border:1px solid red;" >
dsadasdas
    </div>


          <script src="{{ asset('/DatumBase/public/js/dashboard.js') }}"></script>
@endsection

