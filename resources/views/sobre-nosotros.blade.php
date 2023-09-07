@extends('layouts.layout')

@section('title','Sobre Nosotros')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sobre.css') }}">
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
  <h2>SOBRE NOSOTROS</h2>
  <p> SOMOS UNA PAGINA DIRIGIDA A TODO PUBLICO,NO SOLO QUEREMOS QUE LOS ESTUDIANTES ESTEN INFORMADOS SI NO QUE CUALQUIER PERSONA
    ESTE INFORMADA DE  ESTE TEMA, QUE NO SEA SOLO DE PONER UN CONDON, Y QUE SE TENGA EN CUENTA MUCHAS COSAS DE NOSOTROGS MISMOS,
    COMO DE NUESTRAS PAREJAS.
  </p>
  <br>
  <p>QUEREMOS FORMAR UN CAMBIO Y QUE LOS ESTUDIANTES COMO PROFESORES CONCIENTICEN SOBRE ESTE TEMA</p>
  <br>
  
</main>

<div class="content_container">
  
</div>

@endsection