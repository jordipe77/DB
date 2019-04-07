@extends('templates.plantilla')

@section('titulo','Buscar Donante')


<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    @include('partial.errores')


@section('principal')


<div class="card mt-2">
    <div class="card-body">
    <a href="{{url('/introDonacion') }}" class="btn btn-primary">Nueva Donación</a>
    </div>
</div>

<div class="card mt-2">
    <div class="card-header">
        DONATIVOS
    </div>
    <div class="card-body">

            <form action="{{action('donativoController@index')}}" method="get" enctype="form-horizontal">
                <div class="form-group row">

                    <label for="" class="col-1">Nombre</label>
                    <div class="col-10">
                    <input type="text" class="form-control" name="search" id="search" arial-describedby="helpId" placeholder="" value='{{ $search }}'>

                    </div>
                        <button type="submit" class="btn btn-secondary btn-sm col-1">BUSCAR</button>
                </div>
            </form>


        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>SubTipo</th>
                    <th>Centro receptor</th>
                    <th>Centro destino</th>
                    <th>Usuario</th>
                    <th>Donante</th>
                    <th>Coste</th>
                    <th>Unidades</th>
                    <th>Peso</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($donativos as $donativo)

                <tr>
                    <td>{{$donativo->subtipo->tipo->nombre}}</td>
                    <td>{{$donativo->subtipos->nombre}}</td>
                    <td>{{$donativo->centros->nombre}}</td>
                    <td>{{$donativo->centros->nombre}}</td>
                    <td>{{$donativo->usuario->nombre_usuario != null ? $donativo->usuario->nombre_usuario : "No introducido"}}</td>
                    <td>{{$donativo->donantes->nombre != null ? $donativo->donantes->nombre: "No introducido"}}</td>
                    <td>{{$donativo->coste != null ? $donativo->coste : "Coste no especificado"}}</td>
                    <td>{{$donativo->unidades != null ? $donativo->unidades : "No especificado"}}</td>
                    <td>{{$donativo->peso != null ? $donativo->peso : "Sin peso introducido"}}</td>
                    <td>{{$donativo->fecha_donativo}}</td>

                    @if(Auth::check() && Auth::user()->roles_id == 2)
                    <td class="col-button">
                    <form action="{{action('donativoController@edit', [$donativo->id])}}" method="get">
                        <button type="submit" name="editar" class="btn btn-info">EDITAR</button>
                    </form>
                    </td>

                    <td class="col-button">
                    <form action="{{action('donativoController@destroy', [$donativo->id])}}" method="post">
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
        {{ $donativos->appends(['search'=>$search])->links() }}
    </div>
</div>



@endsection

