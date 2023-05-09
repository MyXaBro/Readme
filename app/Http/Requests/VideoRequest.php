<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class VideoRequest extends FormRequest
{
    /**
     * Функция задает правила валидации
     *
     * @return array ValidationRule
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:4', 'max:70'],
            'hashtags' => ['nullable', 'string', 'regex:/^(#?\w+ ?)*$/'],
            'video' => ['required', 'url']
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
            'video.required' => 'Поле Ссылка youtube является обязательной',
            'video.url' => 'Должна быть ссылка на видео-сервис YouTube',
            'hashtags.regex' => 'Хештег должен начинаться с символа #'
        ];
    }
}
