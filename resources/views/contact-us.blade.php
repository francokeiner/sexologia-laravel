@extends('layouts.layout')

@section('title', 'Contact-us')

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
  <h2>CONTACT US</h2>
  <h1>
    <ul>
    <ol>INSTAGRAM: @EDUCA_TU_CUERPO</ol>
    <ol>FACEBOOK: EDUCA TU CUERPO</ol>
    <ol>WHATSAPP: 3205944742</ol>
    </ul>
  </h1>
</main>

<div class="content_container">

</div>
@endsection