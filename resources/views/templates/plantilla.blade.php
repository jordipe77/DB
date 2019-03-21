<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<<<<<<< HEAD
<link href="/DatumBase/public/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" type="text/css" href="{{asset('DatumBase/public/css/bootstrapmin.css')}}">
<!--<link rel="stylesheet" type="text/css" href="/DatumBase/public/css/login.css"> -->
<link rel="stylesheet" type="text/css" href="{{asset('DatumBase/public/css/dashboard.css')}}">
=======
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<!--<link rel="stylesheet" type="text/css" href="/DatumBase/public/css/login.css"> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
>>>>>>> master

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">DONACIONS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active ">
              <a class="nav-link" href="">Donativos</a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link" href="">Donadores</a>
              </li>
              <li class="nav-item active ">
                <a class="nav-link" href="">Estadísticas</a>
              </li>
              <li class="nav-item active ">
                 <a class="nav-link" href="">Opciones</a>
                  </li>

          </ul>

        </div>
      </nav>



<div class="container">@yield('principal')

</div>

</body>
</html>
