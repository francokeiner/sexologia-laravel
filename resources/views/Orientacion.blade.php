@extends('layouts.layout')

@section('title', 'Orientacion sexual')

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
  <h2>SEXUAL ORIENTATION</h2>
  <p>
    ORIENTACION SEXUAL
    Las orientaciones sexuales pueden ser: heterosexual (atracción a personas de distinto sexo), homosexual (atracción hacia personas del mismo sexo) y bisexual (atracción a personas de ambos sexos). Gays: Término político para identificar a hombres que asumen de manera abierta su orientación sexual por otros hombres.
    La orientación sexual es diferente al género y a la identidad de género. La orientación sexual se refiere a quién te atrae y hacia quién sientes atracción romántica, emocional y sexual.
  </p>
</main>
<div class="content_container-1">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/r.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>
          Mientras que la identidad de género no se trata de hacia quién sientes atracción, sino de quién ERES: hombre, mujer, genderqueer, etc.
          La orientación sexual es la capacidad de sentir atracción sexual, erótica, emocional, afectiva o romántica hacia personas del sexo o género opuesto, del mismo sexo o género, o de ambos sexos o más de un género, ​ así como los patrones de atracción.
        </p>
      </div>
    </div>
  </section>
</div>

<div class="content_container-2">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-text">
        <p>
          La orientación sexual se refiere a la atracción emocion al, romántica y/o sexual que una persona siente hacia otras personas. Algunas orientaciones sexuales comunes incluyen la heterosexualidad (atracción hacia personas del sexo opuesto), la homosexualidad (atracción hacia personas del mismo sexo) y la bisexualidad (atracción hacia personas de más de un género).
        </p>
      </div>
      <div class="about-img">
        <img src="{{ asset('images/isa.jpeg') }}" alt="imagen de sexo">
      </div>
    </div>
  </section>
</div>


<div class="content_container-3">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/bandera.png') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>El género se refiere a las construcciones sociales, culturales y psicológicas que las sociedades crean en torno a las diferencias percibidas entre los roles, comportamientos, identidades y expectativas de hombres y mujeres. En otras palabras, el género es una construcción social que influye en cómo las personas se ven a sí mismas y cómo son vistas por los demás en términos de su identidad de género y roles de género.</p>
      </div>
    </div>
  </section>
</div>

<div class="content_container">
</div>
@endsection