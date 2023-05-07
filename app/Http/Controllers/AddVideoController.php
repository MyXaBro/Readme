<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use Illuminate\Routing\Controller;

class AddVideoController extends Controller
{
    /**
     * Показ страницы добавления поста
     * @return \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('adding-post');
    }

    /**
     * Метод для обработки формы video
     * @param VideoRequest $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function store(VideoRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validated();

        // Создание нового объекта модели Post
        $post = auth()->user()->posts()->create([
            'title' => $request->title,
            'video' => $request->video,
            'hashtags' => $request->hashtags,
            'content_type_id' => 2
        ]);

        // Сохранение объекта модели в базе данных
        $post->save();

        return redirect('/post-details/' . $post->id);
    }
}
