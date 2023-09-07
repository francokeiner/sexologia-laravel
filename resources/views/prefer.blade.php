@extends('layouts.layout')

@section('title', 'Preferencia Sexual')

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
  <h2>Preferencia Sexual</h2>
  <p>
  PREFERENCIA SEXUAL
Por lo tanto la orientación sexual es innata, la preferencia genérica es adquirida, es una consecuencia de la orientación sexual, y ambos términos caben en la misma persona pero en momentos diferentes. El término preferencia sexual se puede emplear para las actividades sexuales que más nos gusten o que prefiramos
La identidad de género es cómo te sientes dentro y cómo lo expresas. Tu manera de vestir, tu apariencia y tus comportamientos pueden ser formas de expresar tu identidad de género. La mayoría de las personas se sienten hombre o mujer.
  </p>
</main>
<div class="content_container-1">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/lisa.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>La razón es que la palabra "preferencia" sugiere que la orientación sexual es una elección o una preferencia consciente, lo cual no es cierto. La orientación sexual se considera una parte natural e inherente de la identidad de una persona y no es algo que se elige o se cambia voluntariamente. La investigación científica y la comprensión actual de la orientación sexual respaldan la idea de que es una característica intrínseca y no una preferencia.</p>
      </div>
    </div>
  </section>
</div>

<div class="content_container-2">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-text">
        <p>En el sentido más amplio, la preferencia sexual se utiliza para describir la orientación o la inclinación de una persona hacia ciertos géneros en términos de relaciones románticas o sexuales. Algunas personas pueden tener una preferencia sexual hacia personas del mismo género (homosexual), del género opuesto (heterosexual), de múltiples géneros (bisexual), o pueden experimentar una atracción sexual independientemente del género (pansexual).</p>
      </div>
      <div class="about-img">
        <img src="{{ asset('images/L.jpg') }}" alt="imagen de sexo">
      </div>
    </div>
  </section>
</div>


<div class="content_container-3">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/ayyy.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>Es importante mencionar que el término "preferencia" a veces ha sido criticado porque puede sugerir que la orientación sexual es una elección o una mera preferencia, cuando en realidad es una parte fundamental de la identidad de una persona y no se elige voluntariamente. Por esta razón, muchas personas prefieren usar el término "orientación sexual" en lugar de "preferencia sexual" para enfatizar que la atracción hacia ciertos géneros es una característica innata de la persona y no una mera preferencia.</p>
      </div>
    </div>
  </section>
</div>
<div class="content_container">
</div>
@endsection