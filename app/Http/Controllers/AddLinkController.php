<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Http\Requests\QuoteRequest;
use Illuminate\Routing\Controller;
class AddLinkController extends Controller
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
     * Метод для обработки формы link
     * @param LinkRequest $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function store(LinkRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validated();

        $post = auth()->user()->posts()->create([
            'title' => $request->title,
            'link' => $request->link,
            'hashtags' => $request->hashtags,
            'content_type_id' => 5
        ]);

        $post->save();

        return redirect('/post-details/' . $post->id);
    }
}
