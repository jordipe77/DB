@extends('templates.plantilla')

@section('titulo','Buscar Donante')


<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    @include('partial.errores')


@section('principal')

{{--
<div class="card mt-2">
    <div class="card-body">
    <a href="{{url('/introDonativo') }}" class="btn btn-primary">Nueva Donación</a>
    </div>
</div> --}}

@if(Auth::check() && Auth::user()->roles_id == 2)
<div class="card mt-2">
    <div class="card-body">
    <a href="{{url('/introDonativo') }}" class="btn btn-primary">Nuevo Donacion</a>
    </div>
</div>
@endif



<div class="card mt-2">
    <div class="card-header">
        DONATIVOS
    </div>
    <div class="card-body">

            <form action="{{action('introDonativoController@buscarDonacion')}}" method="get" enctype="form-horizontal">
                    <div class="form-group row">

                        <label for="" class="col-1">Tipo</label>
                        <div class="col-10">
                        <input type="text" class="form-control" name="miSearch" id="search" arial-describedby="helpId"  value="{{$search}}">

                        </div>
                            <button type="submit" class="btn btn-secondary btn-sm col-1">BUSCAR</button>
                    </div>
                </form>

        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                {{-- <td>Tipo</td> --}}
                <td>Subtipo</td>
                <td>Centro receptor</td>
                <td>Centro destí</td>
                <td>Usuario</td>
                <td>Donante</td>
                <td>Coste</td>
                <td>Unidades</td>
                <td>Peso</td>
                <td>Fecha Donativo</td>
                <td>Ruta Factura</td>
                <td></td>
                <td></td>
                </tr>
            </thead>
            <tbody>

                @foreach ($donativos as $donativo)

                <tr>
                    {{-- <td>{{$donativo->id}}</td> --}}
                    <td>{{$donativo->subtipos->nombre}}</td>
                    <td>{{$donativo->centros_receptor_id}} </td>
                    <td>{{$donativo->centros_desti_id}} </td>
                    <td>{{$donativo->usuario->nombre_usuario}} </td>
                    <td>{{$donativo->donantes!= null ? $donativo->donantes->nombre : "Anonimo"}} </td>
                    <td>{{$donativo->coste}} </td>
                    <td>{{$donativo->unidades}} </td>
                    <td>{{$donativo->peso}} </td>
                    <td>{{$donativo->fecha_donativo}} </td>
                    <td>{{$donativo->ruta_factura}} </td>

                    @if(Auth::check() && Auth::user()->roles_id == 2)
                    <td class="col-button">
                    <form action="{{action('introDonativoController@edit', [$donativo->id])}}" method="get">
                        <button type="submit" name="editar" class="btn btn-info">EDITAR</button>
                    </form>
                    </td>

                    <td class="col-button">
                    <form action="{{action('introDonativoController@destroy', [$donativo->id])}}" method="post">
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
        {{$donativos->appends(['search'=>$search])->links()}}
    </div>
</div>



@endsection

