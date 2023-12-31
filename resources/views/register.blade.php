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

    <form method="post" action="{{ route('register') }}" class="content_form">
      @csrf

      @error('name')
        <h6 class="error"> {{ $message }}</h6>
      @enderror
      <label for="name">Nombre</label>
      <input type="text" name="name" value="{{ old('name') }}">

      @error('email')
        <h6 class="error"> {{ $message }}</h6>
      @enderror
      <label for="email">Correo electronico</label>
      <input type="email" name="email" value="{{ old('email') }}">
      
      @error('password')
        <h6 class="error"> {{ $message }}</h6>
      @enderror
      <label for="password">Contraseña</label>
      <input type="password" name="password">

      <label for="password">Confirmar contraseña</label>
      <input type="password" name="password_confirmation">

      <a href="{{ route('login-form') }}">¿Ya tienes una cuenta?</a>

      <div class="content_btn_container">
        <button type="submit">
          Registrarse
        </button>
      </div>
    </form>
  </div>
</div>
@endsection