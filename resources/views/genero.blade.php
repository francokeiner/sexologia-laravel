@extends('layouts.layout')

@section('title', 'GENERO')

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
  <h2>GENDER</h2>
  <p>
  GENERO
De acuerdo a la Organización Mundial de la Salud (OMS), El género se refiere a los conceptos sociales de las funciones, comportamientos, actividades y atributos que cada sociedad considera apropiados para los hombres y las mujeres.
El género se refiere a la manera en que la sociedad cree que tenemos que vernos, pensar y actuar como niñas y mujeres, y niños y hombres. 
  </p>
</main>

<div class="content_container-1">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/trans.jpg') }}" alt="imagen de sexo">
      </div>
      <div class="about-text">
        <p>
        Cada cultura tiene sus creencias y reglas informales sobre cómo deben actuar las personas según su género.
Identidad de género o identidad sexual: es la percepción y manifestación personal del propio género. Es decir, cómo se identifica alguien independientemente de su sexo biológico. La identidad de género puede fluir entre lo masculino y femenino, no existe una norma absoluta que lo defina.
Se pueden encontrar cinco tipos de sexos:
Hembra.
Macho.
Intersexual.
Intersexual con características dominantes masculinas.
Intersexual con características dominantes femeninas.
        </p>
      </div>
    </div>
  </section>
</div>

<div class="content_container-2">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-text">
        <p>El género se refiere a las características, roles, identidades y expectativas asociadas tradicionalmente con ser masculino o femenino en una sociedad dada. Sin embargo, es importante tener en cuenta que el género es una construcción social y cultural, y no necesariamente se limita a una dicotomía binaria de masculino y femenino.
</p>
      </div>
      <div class="about-img">
        <img src="{{ asset('images/puño.jpeg') }}" alt="imagen de sexo">
      </div>
    </div>
  </section>
</div>


<div class="content_container-3">
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-img">
        <img src="{{ asset('images/ji.jpg') }}" alt="imagen de sexo">
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