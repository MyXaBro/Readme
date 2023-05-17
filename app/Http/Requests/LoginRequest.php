<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Функция определяет, авторизован ли пользователь
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Функция задает правила валидации
     *
     * @return array ValidationRule
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    /**
     * Вывод ошибок при валидации формы
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Неверный формат email',
            'password.required' => 'Поле пароль является обязательным'
        ];
    }
}
