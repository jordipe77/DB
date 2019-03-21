@extends('templates.plantilla')

@section('titulo')
Dashboard
@endsection

@section('principal')
<div class="card h-100 mt-4">
    <div class="card-body">
     <div class="row">
        <div class="col-3" style="text-align:center">
                <figure class="item">
                        <img src=" {{ url('imgs/donation.png') }}" style="width:130px;height:80px">
                        <figcaption class="caption mt-2">   <button  type="button" class="btn btn-primary mt-2">Donativos</button></figcaption>
                    </figure>
        </div>
        <div class="col-3" style="text-align:center">
                    <figure class="item">
                            <img src=" {{ url('imgs/donation.png') }}" style="width:130px;height:80px">
                            <figcaption class="caption mt-2">   <button  type="button" class="btn btn-primary mt-2">Recaudado</button></figcaption>
                        </figure>
            </div>
            <div class="col-3" style="text-align:center">
                    <figure class="item">
                            <img src=" {{ url('imgs/donation.png') }}" style="width:130px;height:80px">
                            <figcaption class="caption mt-2">   <button  type="button" class="btn btn-primary mt-2">Centros</button></figcaption>
                        </figure>
            </div>
                <div class="col-3" style="text-align:center">
                            <figure class="item">
                                    <img src=" {{ url('imgs/donation.png') }}" style="width:130px;height:80px">
                                    <figcaption class="caption mt-2">   <button  type="button" class="btn btn-primary mt-2">Rentabilidad</button></figcaption>
                                </figure>
                    </div>
    </div>
  </div>
</div>
          <script src="{{ asset('js/dashboard.js') }}"></script>
          <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
@endsection

