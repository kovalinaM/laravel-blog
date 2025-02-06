<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|integer',
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'Это поле обязательно для заполнения',
            'name.string' => 'Имя должно быть строкой',
            'name.max' => 'Имя не должно превышать 255 символов',
            'email.required' => 'Это поле обязательно для заполнения',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Введен неправильный формат почты',
            'email.max' => 'Почта не более 255 символов',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.required' => 'Это поле не должно быть пустым',
            'password.string' => 'Пароль должен быть строкой',
            'password.min' => 'Пароль должен быть не менее 6 символов',
        ];
    }
}
