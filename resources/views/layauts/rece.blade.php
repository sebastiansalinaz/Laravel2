<!DOCTYPE html>
<html lang="es">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senakicth @yield('title')</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{asset('css/recetas.css')}}">
  <link rel="icon" href="{{ asset('/img/logosena.ico') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
@include('parcial.navegacion')

@yield('conten')
    
</body>    
</html>