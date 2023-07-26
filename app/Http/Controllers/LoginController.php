<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function registerForm()
  {
    return redirect()->route('register-form');
  }

  public function register(RegisterRequest $request) 
  {
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password= $request->password;
    $user->save();

    Auth::login($user, true);

    return redirect()->route('blog');    
  }
}
