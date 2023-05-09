<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Http\Requests\QuoteRequest;
use App\Mail\PostNotification;
use App\Models\Hashtag;
use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

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
            'content_type_id' => 5
        ]);

        $post->save();

        //Добавление хэштегов
        $hashtags = explode(' ', $request->hashtags);
        foreach ($hashtags as $hashtag) {
            if (!empty($hashtag)) {
                $hashtagModel = Hashtag::firstOrCreate(['name' => $hashtag]);
                $post->hashtags()->attach($hashtagModel->id);
            }
        }

        // Отправляем уведомление каждому подписчику
        $this->notifyFollowers($post);

        return redirect('/post-details/' . $post->id)->with('openModal', true);
    }

    /**
     * Метод реализует отправку уведомлений всем подписчикам
     * @param Post $post
     * @return void
     */
    public function notifyFollowers(Post $post): void
    {
        $author = $post->user;

        $followers = $author->subscribers()->get();

        foreach ($followers as $subscriber) {
            Mail::to($subscriber->email)->send(new PostNotification($author, $subscriber, $post));
        }
    }
}
