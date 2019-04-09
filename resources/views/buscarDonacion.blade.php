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



        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                <td>ID</td>
                <td>ID SUBTIPO</td>
                <td>ID Centro receptor</td>
                <td>ID Centro destí</td>
                <td>Usuario ID</td>
                <td>Donante ID</td>
                <td>Coste</td>
                <td>Unidades</td>
                <td>Peso</td>
                <td>Fecha Donativo</td>
                <td>Ruta Factura</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($donativos as $donativo)

                <tr>
                    <td>{{$donativo->id}}</td>
                    <td>{{$donativo->subtipos_id}}</td>
                    <td>{{$donativo->centros_receptor_id}} </td>
                    <td>{{$donativo->centros_desti_id}} </td>
                    <td>{{$donativo->usuarios_id}} </td>
                    <td>{{$donativo->donantes_id}} </td>
                    <td>{{$donativo->coste}} </td>
                    <td>{{$donativo->unidades}} </td>
                    <td>{{$donativo->peso}} </td>
                    <td>{{$donativo->fecha_donativo}} </td>
                    <td>{{$donativo->ruta_factura}} </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection

