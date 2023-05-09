<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class LinkRequest extends FormRequest
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
            'link' => ['required', 'url'],
            'hashtags' => ['nullable', 'string', 'regex:/^(#?\w+ ?)*$/'],
        ];
    }

    /**
     * Вывод ошибок при валидации формы
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Поле заголовок обязательно для заполнения',
            'title.min' => 'Поле заголовок не может быть меньше 4 символов',
            'title.max' => 'Поле заголовок превышает 30 символов',
            'link.required' => 'Поле ссылка обязательно для заполнения',
            'link.url' => 'Ссылка должна быть в формате url',
            'hashtags.regex' => 'Хештег должен начинаться с символа #'
        ];
    }
}
