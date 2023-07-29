@extends('layouts.layout')

@section('title', 'Iniciar sesión')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="content">
  <img src="{{ asset('images/background-image.jpg') }}" alt="background image">

  <div class="content_items content_items-login">
    <h1 class="content_title">Inicia sesión</h1>

    <form method="post" action="{{ route('register') }}" class="content_form">
      @csrf

      <label for="email">Correo electronico</label>
      <input type="email" name="email" value="{{ old('email') }}">
      
      <label for="password">Contraseña</label>
      <input type="password" name="password">

      <a href="{{ route('register-form') }}">¿Aun no tienes una cuenta?</a>

      <div class="content_btn_container">
        <button type="submit">
          Iniciar sesión
        </button>
      </div>
    </form>
  </div>
</div>
@endsection