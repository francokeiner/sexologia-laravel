<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <script src="{{ asset('js/user.js') }}" defer></script>
  @yield('css')
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header_items">
        <div class="header_item">
          <a href="/" class="logo">Logo</a>
          <nav>
            <ul class="header_links">
              <li><a href="#">BLOG</a></li>
              <li><a href="#">CONTENIDO</a></li>
              <li><a href="#">SOBRE NOSOTROS</a></li>
            </ul>
          </nav>
        </div>
        <div class="header_item">
          <a class="header_contact" href="#">
            <img src="{{ asset('images/telephone-fill.svg') }}" alt="imagen de telefono">
            <span>CONTÁCTANOS</span>
          </a>
          @auth
            <div class="header_user">
              <img src="{{ asset('images/person-circle.svg') }}" alt="Image person">
              <span>{{ auth()->user()->name }}</span>
              <div class="user_options">
                <a href="#">Cerrar sesión</a>
              </div>
            </div>
            @else
            <a class="header_login" href="#">INICIAR SESIÓN</a>
          @endauth
      </div>
    </div>
  </header>
  @yield('content')
</body>
</html>