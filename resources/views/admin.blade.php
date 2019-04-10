@extends('templates.plantilla')

@section('titulo')
ADMIN MODE
@endsection

<link rel="stylesheet" type="text/css" href="{{asset('css/ADMIN.css')}}">

@section('principal')
    <h2 style="color:#007bff;">OPCIONES DE ADMINISTRADOR</h2>
<table>
    <tbody>

        <tr>
            <td>
            <a href="{{url('/buscarUsuario')}}">
                <div class="card mr-2 carta" id="cards_botones">

                    <button type="button" class="btn bot boton" name="boton1"><p>USUARIO</p></button>

                </div>
            </a>
            </td>
        </tr>
        <tr>
            <td>
            <a href="{{url('/buscarDonante')}}">
                    <div class="card mr-2 carta" id="cards_botones">
                        <button type="button" class="btn bot boton" name="boton2"><p>DONANTE</p></button>
                    </div>
            </a>
            </td>
        </tr>
        <tr>
            <td>
            <a href="{{url('/buscarDonacion')}}">
                    <div class="card mr-2 carta" id="cards_botones">
                        <button type="button" class="btn bot boton" name="boton4"><p>DONACIÓN</p></button>
                    </div>
            </a>
            </td>
        </tr>
        <tr>
            <td>
                <div style="height:75px;"></div>
            </td>
        </tr>
    </tbody>
</table>

@endsection
