<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class TextRequest extends FormRequest
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
            'content' => ['required', 'string', 'min:10', 'max:1000'],
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
            'content.required' => 'Поле текст поста обязательно для заполнения',
        ];
    }
}
