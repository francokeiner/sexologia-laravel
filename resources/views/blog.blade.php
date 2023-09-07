@extends('layouts.layout')

@section('title', 'Educa tu cuerpo')

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
  <h2>AUTOCONCEPTO</h2>
  <p>
  AUTOCONCEPTO El autoconcepto es la opinión que una persona tiene sobre sí misma, que lleva asociado un juicio de valor. Autoconcepto no es lo mismo que autoestima, sin embargo su relación es muy estrecha y no podría entenderse uno sin la presencia del otro.La manera en que nos vemos a nosotros mismos y a nuestras habilidades es lo que podríamos llamar el «autoconcepto». Ejemplos del auto-concepto podrían ser:
  </p>
</main>
<div class="content_container-1">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/sonrie.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p> «Soy una persona sociable», «Puedo resolver cualquier problema», «Estoy gorda», «Soy poco atractivo», «Soy torpe», «Soy incontrolable», etc. Existen tres tipos de autoconceptos, los cuales se caracteriza por el concepto que tiene una persona de sí misma en diferentes entornos o situaciones. Dentro de los tipos de autoconcepto encontramos el yo individual, el yo colectivo y el yo interpersonal. El autoconcepto es la opinión, el concepto o la impresión que la gente tiene de sí misma, opinión que se desarrolla a lo largo de los años. Por tanto se trata del conjunto de percepciones cognoscitivas y actitudes que la gente tiene acerca de sí misma. </p>
      </div>
    </div>
  </section>
</div>

<div class="content_container-2">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-text">
        <p>El autoconcepto se refiere a la imagen o percepción que una persona tiene de sí misma. Incluye las creencias, pensamientos y percepciones que una persona tiene sobre quién es, sus habilidades, características físicas y emocionales, y su identidad en general.</p>
      </div>
      <div class="about-img">
        <img src="{{ asset('images/abrazo.jpg') }}" alt="imagen de sexo">
      </div>
    </div>
  </section>
</div>


<div class="content_container-3">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/aja.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>Se refiere a la percepción, creencias y evaluaciones que una persona tiene acerca de sí misma. Es la imagen mental que una persona tiene de sí misma, que incluye su percepción de sus características físicas, habilidades, personalidad, roles sociales y otros aspectos de su identidad. El autoconcepto es una parte fundamental de la identidad de una persona y juega un papel importante en su autoestima y autoevaluación.</p>
      </div>
    </div>
  </section>
</div>



<div class="content_container">
</div>
@endsection