<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            'content' => ['required', 'string', 'min:4', 'max:1000'],
            'quote_author' => ['required', 'string', 'url','min:4', 'max:70'],
            'hashtags' => ['nullable', 'string', 'max:255'],
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
            'content.min' => 'Минимальная длина текста - 10 символов',
            'content.max' => 'Мaксимальная длина текста- 1000 символов',
            'content.required' => 'Поле текст цитаты обязательно для заполнения',
            'quote_author.required' => 'Поле автор обязательно для заполнения',
            'quote_author.min' => 'Минимальная длина Автора - 4 символа',
            'quote_author.max' => 'Максимальная длина Автора - 70 символов',
            'quote_author.url' => 'Должна быть ссылка на автора',

        ];
    }
}
