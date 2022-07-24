<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:20',
            'surname' => 'required|string|max:20',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|string|min:8',
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'Имя объязательно нужно написать',
          'surname.required' => 'Фамилия объязательно нужно написать',
          'email.required' => 'Напишите объязательно почту',
          'password.required' => 'Пароль объязательно нужно написать и минимум 8 символов',
        ];
    }
}
