@extends('layouts.layout')

@section('title', 'Educa tu cuerpo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus incidunt quos sequi nemo alias, libero fugit, numquam, accusantium ab quisquam ratione at consequatur reprehenderit ipsam nisi odit architecto voluptatibus magnam.</p>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste incidunt facilis quasi rerum vitae consequuntur autem rem a amet repellat. Fugit reiciendis at laborum non nobis quis omnis distinctio cum!</p>

  <h2>Otro titulo</h2>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ad sit, libero doloremque cumque at harum assumenda ullam fuga tenetur reprehenderit architecto ut obcaecati magnam deleniti esse, ducimus iste. Maxime!</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam provident perferendis fuga. Unde delectus et velit ad, non, odit sequi ab commodi dolorem architecto earum. Libero est architecto error accusantium.</p>
</main>
@endsection