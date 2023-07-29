<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::view('/', 'app');

Route::view('registrarse', 'register')->name('register-form');

Route::post('registrarse', [LoginController::class, 'register'])->name('register');

Route::view('blog', 'blog')->name('blog');

Route::group(['middleware' => ['auth']], function() {
  Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});