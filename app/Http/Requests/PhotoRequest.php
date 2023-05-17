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
            'link' => ['nullable', 'required_without:image', 'url'],
            'hashtags' => ['nullable', 'string', 'regex:/^(#?\w+ ?)*$/'],
            'image' => ['nullable', 'required_without:link', 'image', 'max:2048', 'mimes:jpeg,png,gif'],
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
            'image.image' => 'Неправильный тип изображения',
            'image.mimes' => 'Фото должно быть jpeg,gif, либо png',
            'hashtags.regex' => 'Хештег должен начинаться с символа #',
            'image.required_without' => 'Вы должны загрузить фото или указать ссылку',
            'link.required_without' => 'Вы должны указать ссылку или загрузить фото'
        ];
    }
}
