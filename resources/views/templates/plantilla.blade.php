<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/todo.js')}}"></script>


<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/todo.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<div class="sidebar">
        <div style="max-height:100%;margin-top:25%">
        <h2>Menú</h2>
    <ul>
        <li style="background-color:#966e4f !important;"><a href="">Acciones Frequentes</a></li>
        <li><a href="{{url('/dashboard')}}">Inicio</a></li>
        <li><a href="{{ url('/introDonativo')}}">Introducir Donación</a></li>
        <li><a href="{{ url('/nuevoDonante')}}">Introducir Donante</a></li>
        <li><a href="">Estadísticas</a></li>
        <li><a href="{{ url('/buscarUsuario')}}">Ver tabla usuarios</a></li>
        <li><a href="{{ url('/buscarDonante')}}">Ver tabla donantes</a></li>
        <li><a href="{{ url('/buscarDonacion')}}">Ver tabla donaciones</a></li>

        @if(Auth::check() && Auth::user()->roles_id == 2)
        <li><a href="{{ url('/admin')}}">Panel de Administrador</a></li>
        @endif
    </ul>
        </div>
        <div class="logo">
        <img src="{{asset('imgs/spam_donantes.png')}}">
        </div>
    </div>
<body>
<nav class="navbar navbar-expand-lg">
        <img src="{{asset('imgs/Hamburger_icon.png')}}" alt="hamb" class="menu-bar" style="max-height:40px;margin-bottom:5px">
        <a class="navbar-brand text-hide" >
        <img src="{{asset('imgs/logo_mini.png')}}" alt="">
        </a>

               <ul class="navbar-nav ml-auto">

               @if(Auth::check())
               <li class="nav-item ">
                   <a class="nav-item" data-toggle="dropdown" role="button" aria-haspopup="true" style="color:black" aria-expanded="false">
                   {{Auth::user()->nombre_usuario}}
                </a>
               </li>
               <li>
                   <div class="nav-item">
                   <a class="nav-link" href="{{ route('logout') }}">LOGOUT</a>
                   </div>
               </li>
               @else
               <div class="nav-item login">
                   <a class="nav-link" href="{{ url('/login') }}">LOGIN</a>
               </div>
               @endif

           </ul>
      </nav>

<div class="container main">@yield('principal')

</div>
</body>
</html>
