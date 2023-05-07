<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:4|max:16',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required|same:password',
            'userpic-file' => ['nullable', 'image', 'max:2048', 'mimes:jpeg,png,gif'],
        ];
    }

    /**
     * Вывод ошибок при валидации формы
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле логин является обязательным',
            'name.min' => 'Минимальное количество символов в поле имя 4',
            'name.max' => 'Максимальное количество символов в поле имя 16',
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Неверный формат email',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.required' => 'Поле пароль является обязательным',
            'password.min' => 'Минимальное количество символов в поле пароль 8',
            'password.max' => 'Максимальное количество символов в поле пароль - 20',
            'password.confirmed' => 'Пароли не совпадают',
            'password_confirmation.same' => 'Поле повтор пароля должно соответствовать полю пароль',
            'password_confirmation.required' => 'Поле повтор пароля должно быть заполнено',
            'userpic-file.image' => 'Неправильный тип изображения',
            'userpic-file.mimes' => 'Фото должно быть jpeg,gif, либо png'
        ];
    }
}
