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
          <a href="/"><img class="imag-conta" src="{{ asset('images/sexologia.png') }}" alt="logo"></a>

          <nav>
            <ul class="header_links">
              <li><a href="/">EDUCA TU CUERPO</a></li>
              <!-- <li><a href="contenido">CONTENIDO</a></li>-->

            </ul>
          </nav>
        </div>
        <div class="header_item">
          <a class="header_contact" href="contactanos">
            <img src="{{ asset('images/telephone-fill.svg') }}" alt="imagen de telefono">
            <span>CONNECT WITH US</span>
          </a>
          @auth
          <div class="header_user">
            <img src="{{ asset('images/person-circle.svg') }}" alt="Image person">
            <span>{{ auth()->user()->name }}</span>
            <div class="user_options">
              <a href="{{ route('logout') }}">LOG OUT</a>
            </div>
          </div>
          @else
          <a class="header_login" href="{{ route('login-form') }}">LOG IN</a>
          @endauth
        </div>
      </div>
  </header>
  @yield('content')
  <!-- <footer class="footer">
    <section class="footer__container container">
      <nav class="nav nav--footer">
        <h2 class="footer__title">
          <a href="/"><img class="imag-conta-2" src="{{ asset('images/sexologia.png') }}" alt="logo"></a>
          EDUCA TU CUERPO
        </h2>

      </nav>
    </section>
    <section class="footer__copy container">
      <hr class="hr-2">
      <div class="footer__social">
        <a href="#" class="footer__icons"> <img src="{{ asset('images/icono.svg') }}" class="footer__img"></a>
        <a href="#" class="footer__icons"> <img src="{{ asset('images/insta.svg') }}" class="footer__img"></a>
        <a href="#" class="footer__icons"> <img src="{{ asset('images/insta.svg') }}" class="footer__img"></a>
      </div>
      <h3 class="footer__copyright">Rights Reserved &copy;EDUCA TU CUERPO</h3>
    </section>
  </footer> -->

  <footer class="_footer">
    <div class="container footer_container">
      <a class="footer_title" href="/">
        <img class="imag-conta-2" src="{{ asset('images/sexologia.png') }}" alt="logo"> <span>EDUCA TU CUERPO</span>
      </a>
      <nav>
        <ul class="footer_list">
          <li><a href="#"><img src="{{ asset('images/icono.svg') }}" class="footer__img"></a></li>
          <li><a href="#"><img src="{{ asset('images/insta.svg') }}" class="footer__img"></a></li>
          <li><a href="#"><img src="{{ asset('images/wpp.svg') }}" class="footer__img"></a></li>
        </ul>
      </nav>
      <div class="footer_copy">Rights Reserved &copy;EDUCA TU CUERPO</div>
    </div>
  </footer>
</body>

</html>