<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subscription;
use Illuminate\Routing\Controller;

class FeedController extends Controller
{
    /**
     * Показывает все посты юзеров на кого подписан пользователь
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(Request $request): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $filter = $request->input('filter');

        $subscribedUserIds = Subscription::where('user_id', auth()->id())
            ->pluck('subscribed_to_id')
            ->toArray();

        $subscribedUserIds[] = auth()->id();

        $posts = Post::whereIn('user_id', $subscribedUserIds)
            ->with('user')
            ->withCount(['likes', 'comments'])
            ->orderByDesc('created_at');

        $posts->orWhere('user_id', auth()->id());

        if ($filter == 'all') {
            $posts->whereHas('contentType', function ($query) {
                $query->whereIn('name', ['Картинка', 'Видео', 'Текст', 'Цитата', 'Ссылка']);
            });
        }

        if ($filter == 'photo') {
            $posts->whereHas('contentType', function ($query) {
                $query->where('name', 'Картинка');
            });
        }

        if ($filter == 'video') {
            $posts->whereHas('contentType', function ($query) {
                $query->where('name', 'Видео');
            });
        }

        if ($filter == 'text') {
            $posts->whereHas('contentType', function ($query) {
                $query->where('name', 'Текст');
            });
        }

        if ($filter == 'quotes') {
            $posts->whereHas('contentType', function ($query) {
                $query->where('name', 'Цитата');
            });
        }

        if ($filter == 'link') {
            $posts->whereHas('contentType', function ($query) {
                $query->where('name', 'Ссылка');
            });
        }

        $posts = $posts->paginate(10);

        return view('feed', compact('posts'));
    }

}

