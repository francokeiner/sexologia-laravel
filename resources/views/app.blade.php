@extends('layouts.layout')

@section('title', 'Educa tu cuerpo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/carrusel.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
<div class="init">
  <img src="{{ asset('images/background-image.jpg') }}" alt="imagen de fondo">
  <div class="container init_content">
    <h1>Conoce tu cuerpo, vive tu sexualidad</h1>
    <p>
      La sexualidad hace parte de todas las etapas de la vida. Conoce tu cuerpo y <br>
      disfrútalo con libertad
    </p>
  </div>
</div>
<main class="content">
  <h2>Educa tu cuerpo</h2>
  <p>un tema de vital importancia en el desarrollo integral de nuestros jóvenes y la construcción de una sociedad informada y saludable: la educación sexual. En un mundo en constante evolución, donde la información fluye libremente y los desafíos cambian rápidamente, es esencial que brindemos a nuestras generaciones más jóvenes las herramientas necesarias para tomar decisiones informadas y responsables en relación con su salud sexual y emocional.
  </p>
  <p>La educación sexual no se trata simplemente de transmitir hechos biológicos o anatomía. Es un proceso en el que debemos empoderar a los jóvenes para que comprendan su cuerpo, sus emociones y sus relaciones de manera profunda y respetuosa. Debemos fomentar un ambiente en el que puedan hacer preguntas sin temor a ser juzgados, donde puedan acceder a información precisa y actualizada y donde puedan aprender sobre la importancia del consentimiento, el respeto mutuo y la comunicación abierta.</p>
</main>

<div class="content_container-1">
  <section class="about" id="about">
    <div class="about-container">
   
      <div class="about-img">
        <img src="{{ asset('images/azul.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
      <h2>Sobre nosotros</h2>
      <br>
        <p>Al educar sobre la sexualidad, no solo estamos proporcionando información práctica, sino también promoviendo valores fundamentales. La educación sexual puede contribuir a la prevención de enfermedades de transmisión sexual y embarazos no deseados, así como a la reducción de mitos y estigmas que rodean a la sexualidad. Además, promueve la igualdad de género al desafiar estereotipos y roles tradicionales.</p>
      </div>
    </div>
  </section>
</div>


<div class="content_container-2">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-text">
      <h2>Sobre nosotros</h2>
      <br>
        <p>Como sociedad, tenemos la responsabilidad de asegurarnos de que la educación sexual sea inclusiva y respetuosa de la diversidad. No debemos dejar a nadie atrás debido a su orientación sexual, identidad de género o antecedentes culturales. Cada individuo merece acceder a información que sea relevante y útil para su propia experiencia y realidad.</p>
      </div>
      <div class="about-img">
        <img src="{{ asset('images/endo.png') }}" alt="imagen de sexo">
      </div>
    </div>
  </section>
</div>

<div class="carrusel-1">
  <p class="para"></p>
  <div class="buttom" >
    <a id="link" href="/autoestima">Ver más</a>
  </div>
  
  <div class="img">
    <img src="{{ asset('images/RR.jpg') }}" alt="">
  </div>
  <i id="dere" class='bx bx-chevron-right flecha'></i>
  <i id="izq" class='bx bx-chevron-left flecha flecha-left'></i>
 
</div>


<div class="content_container-3">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/sonriendo.png') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
      <h2>Sobre nosotros</h2>
      <br>
        <p>la educación sexual es una inversión en el bienestar de nuestras futuras generaciones y en el fortalecimiento de nuestra sociedad en su conjunto. Al brindar información precisa, promover valores de respeto y consentimiento, y fomentar la igualdad de género, estamos sentando las bases para un mundo más informado, empoderado y saludable. Sigamos adelante con el compromiso de brindar una educación sexual integral y comprensiva a todos los jóvenes, para que puedan navegar por sus vidas con confianza y respeto por sí mismos y por los demás.</p>
      </div>
    </div>
  </section>
</div>

<script src="{{ asset('js/carrusel.js') }}"></script>

@endsection