@extends('layouts.layout')

@section('title', 'Registrarse')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="content">
  <img src="{{ asset('images/background-image.jpg') }}" alt="background image">

  <div class="content_items">
    <h1 class="content_title">Registrate</h1>

    <form method="post" action="" class="content_form">
      <label for="name">Nombre</label>
      <input type="text" name="name">

      <label for="email">Correo electronico</label>
      <input type="email" name="email">

      <label for="password">Contraseña</label>
      <input type="password" name="password">

      <label for="password">Confirmar contraseña</label>
      <input type="password" name="password_confirmation">

      <a href="#">¿Ya tienes una cuenta?</a>

      <div class="content_btn_container">
        <button type="submit">
          Registrarse
        </button>
      </div>
    </form>
  </div>
</div>
@endsection