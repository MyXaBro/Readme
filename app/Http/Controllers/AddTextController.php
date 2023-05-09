<?php

namespace App\Http\Controllers;


use App\Http\Requests\PhotoRequest;
use App\Http\Requests\TextRequest;
use App\Mail\PostNotification;
use App\Models\ContentType;
use App\Models\Hashtag;
use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

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
            'content_type_id' => 3
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

        return redirect('/post-details/' . $post->id);
    }

    public function notifyFollowers(Post $post): void
    {
        $author = $post->user;

        $followers = $author->subscribers()->get();

        foreach ($followers as $subscriber) {
            Mail::to($subscriber->email)->send(new PostNotification($author, $subscriber, $post));
        }
    }
}
