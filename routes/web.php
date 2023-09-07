<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;




Route::view('/', 'app');
Route::view('blog', 'blog')->name('blog');
Route::view('contactanos', 'contact-us');
Route::view('sobre-nosotros','sobre-nosotros');
Route::view('contenido','content');
Route::view('autoestima','Auto');
Route::view('relaciones-interpersonales','Relacion');
Route::view('gen','genero');
Route::view('orenta','Orientacion');
Route::view('preferenc','prefer');



Route::get('registrarse', [LoginController::class, 'registerForm'])->name('register-form');
Route::get('iniciar-sesion', [LoginController::class, 'loginForm'])->name('login-form');

Route::post('registrarse', [LoginController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth']], function() {
  Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});