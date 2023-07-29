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
    return view('register');
  }

  public function LoginForm()
  {
    return view('login');
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

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}
