@extends('templates.plantilla')

@section('titulo','Buscar Usuario')


<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    @include('partial.errores')


@section('principal')


<div class="card mt-2">
    <div class="card-body">
    <a href="{{url('/registro') }}" class="btn btn-primary">Nuevo Usuario</a>
    </div>
</div>

<div class="card mt-2">
    <div class="card-header">
        USUARIOS
    </div>
    <div class="card-body">

            <form action="{{action('UsuarioController@index')}}" method="get" enctype="form-horizontal">
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
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nombre_usuario}}</td>
                    <td>{{$usuario->correo}}</td>
                    <td>{{$usuario->rol->rol}}</td>
                    <td class="col-button">
                    <form action="{{action('UsuarioController@edit', [$usuario->id])}}" method="get">
                        <button type="submit" name="editar" class="btn btn-info">EDITAR</button>
                    </form>
                    </td>

                    <td class="col-button">
                    <form action="{{action('UsuarioController@destroy', [$usuario->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" name="borrar" class="btn btn-danger">BORRAR</button>
                    </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        {{ $usuarios->appends(['search'=>$search])->links() }}
    </div>
</div>



@endsection

