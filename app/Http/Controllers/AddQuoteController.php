<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Http\Requests\TextRequest;
use Illuminate\Routing\Controller;
use League\CommonMark\Extension\SmartPunct\Quote;

class AddQuoteController extends Controller
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
     * Метод для обработки формы quote
     * @param QuoteRequest $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function store(QuoteRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validated();

        $post = auth()->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->input('content', ''),
            'quote_author' => $request->quote_author,
            'hashtags' => $request->hashtags,
            'content_type_id' => 4
        ]);

        $post->save();

        return redirect('/post-details/' . $post->id);
    }
}
