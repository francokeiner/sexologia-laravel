<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  @yield('css')
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header_items">
        <div class="header_item">
          <a href="#" class="logo">Logo</a>
          <nav>
            <ul class="header_links">
              <li><a href="#">BLOG</a></li>
              <li><a href="#">CONTENIDO</a></li>
              <li><a href="#">SOBRE NOSOTROS</a></li>
            </ul>
          </nav>
        </div>
        <div class="header_item">
          <img src="{{ asset('images/telephone-fill.svg') }}" alt="imagen de telefono">
          <a class="header_contact" href="#">CONTÁCTANOS
          @auth
          <img src="{{ asset('images/person-circle.svg') }}" alt="Image person">
            <span>{{ auth()->user()->name }}</span>
            @else
            <a class="header_login" href="#">INICIAR SESIÓN</a>
          @endauth
      </div>
    </div>
  </header>
  @yield('content')
</body>
</html>