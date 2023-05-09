<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Mail\PostNotification;
use App\Models\Hashtag;
use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

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
            'content_type_id' => 2
        ]);

        // Сохранение объекта модели в базе данных
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
