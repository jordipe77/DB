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


        <table clas="table table-striped table-hover mt-5">
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
                @foreach ($donaciones as $donacion)
                <tr>
                    {{-- <td>{{$donacion->subtipo->tipo->nombre}}</td> --}}
                    <td>{{$donacion->subtipos->nombre}}</td>
                    <td>{{$donacion->centros->nombre}}</td>
                    <td>{{$donacion->centros->nombre}}</td>
                    <td>{{$donacion->usuario->nombre_usuario}}</td>
                    <td>{{$donacion->donantes->nombre}}</td>
                    <td>{{$donacion->coste}}</td>
                    <td>{{$donacion->unidades}}</td>
                    <td>{{$donacion->peso}}</td>
                    <td>{{$donacion->fecha_donativo}}</td>
                    <td class="col-button">
                    <form action="{{action('donativoController@edit', [$donacion->id])}}" method="get">
                        <button type="submit" name="editar" class="btn btn-info">EDITAR</button>
                    </form>
                    </td>

                    <td class="col-button">
                    <form action="{{action('donativoController@destroy', [$donacion->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" name="borrar" class="btn btn-danger">BORRAR</button>
                    </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        {{ $donantes->appends(['search'=>$search])->links() }}
    </div>
</div>



@endsection

