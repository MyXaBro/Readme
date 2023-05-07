<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
{
    /**
     * Функция задает правила валидации
     *
     * @return array ValidationRule
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:4', 'max:30'],
            'link' => ['nullable', 'url'],
            'hashtags' => ['nullable', 'string', 'max:255'],
            'userpic-file' => ['nullable', 'image', 'max:2048', 'mimes:jpeg,png,gif'],
            'content' => ['nullable', 'text'],
        ];
    }


    /**
     * Вывод ошибок при валидации формы
     * @return string[]
     */
    public function messages(): array
    {
        return [
               'title.required' => 'Поле заголовок обязательно для заполнения.',
               'title.min' => 'Поле заголовок не может быть меньше 4 букв',
               'title.max' => 'Поле заголовок превышает 30 букв',
                'userpic-file.image' => 'Неправильный тип изображения',
                'userpic-file.mimes' => 'Фото должно быть jpeg,gif, либо png'

        ];
    }
}
