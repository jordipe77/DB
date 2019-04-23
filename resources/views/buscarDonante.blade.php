@extends('templates.plantilla')

@section('titulo','Buscar Donante')


<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    @include('partial.errores')
@section('principal')

@if(Auth::check() && Auth::user()->roles_id == 2)
<div class="card mt-2">
    <div class="card-body">
    <a href="{{url('/nuevoDonante') }}" class="btn btn-primary">Nuevo Donante</a>
    <a href="{{url('/export-donantes') }}" class="btn btn-info">Descargar Excel</a>
    
    </div>
</div>
@endif


<div class="card mt-2">
    <div class="card-header">
        DONANTES
    </div>
    <div class="card-body">

            <form action="{{action('donanteController@index')}}" method="get" enctype="form-horizontal">
                <div class="form-group row">

                    <label for="" class="col-1">Nombre</label>
                    <div class="col-10">
                    <input type="text" class="form-control" name="search" id="search" arial-describedby="helpId" placeholder="" value='{{ $search }}'>
                    </div>
                        <button type="submit" class="btn btn-secondary btn-sm col-1">BUSCAR</button>
                </div>
            </form>


        <table id="tablaDonante" class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>CIF</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Dirección</th>
                    <th>País</th>
                    <th>Población</th>
                    <th>SPAM</th>
                    <th>Fecha Alta</th>
                    @if(Auth::check() && Auth::user()->roles_id == 2)
                    <th>Editar</th>
                    <th>Borrar</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($donantes as $donante)
                <tr>
                    <td>{{$donante->nombre}}</td>
                    <td>{{$donante->cif}}</td>
                    <td>{{$donante->telefono}}</td>
                    <td>{{$donante->sexo != null ? $donante->sexo->sexo : "Sin sexo Asig."}}</td>
                    <td>{{$donante->direccion}}</td>
                    <td>{{$donante->pais}}</td>
                    <td>{{$donante->poblacion}}</td>
                    @if($donante->spam==1)
                    <td>Sí</td>
                    @else
                    <td>No</td>
                    @endif
                    <td>{{$donante->fecha_alta}}</td>


                    @if(Auth::check() && Auth::user()->roles_id == 2)
                    <td class="col-button">
                    <form action="{{action('donanteController@edit', [$donante->id])}}" method="get">
                        <button type="submit" name="editar" class="btn btn-info">EDITAR</button>
                    </form>
                    </td>

                    <td class="col-button">
                    <form action="{{action('donanteController@destroy', [$donante->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" name="borrar" class="btn btn-danger">BORRAR</button>
                    </form>
                    </td>
                    @endif
                </tr>

                @endforeach
            </tbody>
        </table>
        {{ $donantes->appends(['search'=>$search])->links() }}
    </div>
</div>
<script type="text/javascript" src="js/buscar.js"> </script>


@endsection

