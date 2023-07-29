<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::view('/', 'app');
Route::view('blog', 'blog')->name('blog');

Route::get('registrarse', [LoginController::class, 'registerForm'])->name('register-form');
Route::get('iniciar-sesion', [LoginController::class, 'loginForm'])->name('login-form');

Route::post('registrarse', [LoginController::class, 'register'])->name('register');

Route::group(['middleware' => ['auth']], function() {
  Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});