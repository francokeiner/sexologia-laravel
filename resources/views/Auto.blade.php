@extends('layouts.layout')

@section('title', 'Autoestima')

@section('css')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
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
  <h2>SELF CONCEPT</h2>
  <p>
    AUTOESTIMA
    La autoestima es el conjunto de percepciones, pensamientos, evaluaciones, sentimientos y tendencias de comportamientos dirigidos hacia uno mismo, hacia nuestra manera de ser, y hacia los rasgos de nuestro cuerpo y nuestro carácter.
    Se puede definir la autoestima como «la valoración positiva o negativa que el sujeto hace de su autoconcepto, valoración que se acompaña de sentimientos de valía personal y auto aceptación»

  </p>
</main>

<div class="content_container-1">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/ok.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>Tener buena autoestima nos ayuda a sentirnos mucho mejor con nosotros mismos y actuar como más motivación. Por lo tanto, una buena autoestima puede ayudarnos a: Conocernos, aceptarnos y aceptarnos tal y como somos.
          ¿Por qué es importante la autoestima en las personas? Es importante para que la persona sea capaz de cumplir sus objetivos, se reconozca a sí misma y tenga un buen autoconcepto, una buena identidad de quién es, de qué quiere y hasta dónde quiere llegar.
        </p>
      </div>
    </div>
  </section>
</div>

<div class="content_container-2">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-text">
        <p>¿Cuáles son los factores que afectan la autoestima?
          Autoestima baja? Cómo dejar de ser nuestro peor enemigo
          “Entre las causas más frecuentes de baja autoestima podemos destacar las siguientes: mensajes negativos, abusos, ridiculización del aspecto físico, mal ambiente familiar, dificultades académicas, experiencias negativas tempranas o falta de demostración de cariño y afecto por el entorno”.
        </p>
      </div>
      <div class="about-img">
        <img src="{{ asset('images/nigga.jpg') }}" alt="imagen de sexo">
      </div>
    </div>
  </section>
</div>


<div class="content_container-3">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/mm.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>¿Cómo se forma la autoestima de una persona?
          La autoestima se desarrolla desde que somos pequeños y nunca para de cambiar, evolucionar, mejorar o deteriorarse. Está en continuo movimiento y no es espontánea ni voluntaria, sino que proviene de lo que cada uno experimentamos en distintas situaciones.
          La autoestima es la valoración emocional y cognitiva que una persona tiene de sí misma. Está relacionada con cuánto se valora, respeta y acepta a sí misma. Una autoestima saludable implica tener una opinión positiva de uno mismo y sentirse capaz y digno de amor y respeto.
      </div>
  </section>
</div>
<div class="content_container">
</div>
@endsection