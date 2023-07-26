<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => 'required|min:3',
      'email' =>  'required|email|unique:users',
      'password' => 'required|min:6|confirmed'
    ];
  }

  public function messages():array
  {
    return [
      'name.required' => 'nombre es requerido',
      'email.required' => 'El correo electronico es requerido',
      'password.required' => 'La contraseña es requerida',
      'email.email' => 'El correo electronico debe ser una dirección de correo valida',
      'name.min' => 'El nombre debe ser de al menos 3 o mas caracteres',
      'email.unique' => 'El correo electronico esta en uso',
      'password.min' => 'La contraseña debe ser de al menos 6 caracteres',
      'password.confirmed' => 'Las contraseñas no coinciden'
    ];
  }
}
