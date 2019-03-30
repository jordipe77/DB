@extends('templates.plantilla')

@section('titulo','Buscar Usuario')


<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">   
    @include('partial.errores')


@section('principal')

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
                    <td><button type="submit" class="btn btn-success btn-sm">Editar</button></td>
                    <td><button type="submit" class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $usuarios->appends(['search'=>$search])->links() }}
    </div>
</div>



@endsection

