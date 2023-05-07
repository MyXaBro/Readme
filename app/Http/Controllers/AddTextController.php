<?php

namespace App\Http\Controllers;


use App\Http\Requests\PhotoRequest;
use App\Http\Requests\TextRequest;
use App\Models\ContentType;
use Illuminate\Routing\Controller;

class AddTextController extends Controller
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
     * Метод для обработки формы text
     * @param TextRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(TextRequest $request)
    {
        $request->validated();

        $post = auth()->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->input('content', ''),
            'hashtags' => $request->hashtags,
            'content_type_id' => 3
        ]);

        $post->save();

        return redirect('/post-details/' . $post->id);
    }
}
