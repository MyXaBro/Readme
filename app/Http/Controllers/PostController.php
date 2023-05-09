<?php

namespace App\Http\Controllers;


use App\Mail\PostNotification;
use App\Models\Hashtag;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Метод реализует представление поста на странице
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show($id): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::findOrFail($id);
        $user = $this->getUserInfo($post->user_id);
        $postCount = $user->posts()->count();
        $hashtags = $post->hashtags()->get();
        $comments = $post->comments()->get();

        return view('post-details', compact('post', 'user', 'postCount', 'hashtags', 'comments'));
    }

    /**
     * Получаем информацию о пользователе из модели User вместе с датой создания поста
     * @param $userId
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    private function getUserInfo($userId)    {
        $user = User::with(['posts' => function ($query) {
            $query->orderBy('created_at', 'desc')->take(1);
        }])->find($userId);

        return $user;
    }

    /**
     * Добавление просмотров к посту
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function addView($id): \Illuminate\Http\JsonResponse
    {
        $post = Post::findOrFail($id);

        $cookieName = 'post_'.$id;
        if (!Cookie::has($cookieName)) {

            $post->increment('views');
            Cookie::queue($cookieName, true, 60*24);
        }

        return response()->json(['views' => $post->views]);
    }

    /**
     * Вывод данных на страницу popular
     * @return \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('popular', compact('posts'));
    }

    /**
     * Выполняет сортировку на странице popular
     * @param $sort
     * @return \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function sort($sort): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = [];

        if ($sort === 'likes') {
            $posts = Post::withCount('likes')->orderBy('likes_count', 'desc')->paginate(6);
        } else if ($sort === 'popular') {
            $posts = Post::orderBy('views', 'desc')->orderBy('created_at', 'desc')->paginate(6);
        } else if ($sort === 'date') {
            $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        }

        return view('popular', compact('posts', 'sort'));
    }

    /**
     * Фильтрация постов на странице popular
     * @param $filter
     * @return \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function filter($filter): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        switch ($filter) {
            case 'photo':
                $posts = Post::whereHas('contentType', function ($query) {
                    $query->where('name', 'Картинка');
                })->get();
                break;
            case 'video':
                $posts = Post::whereHas('contentType', function ($query) {
                    $query->where('name', 'Видео');
                })->get();
                break;
            case 'text':
                $posts = Post::whereHas('contentType', function ($query) {
                    $query->where('name', 'Текст');
                })->get();
                break;
            case 'quote':
                $posts = Post::whereHas('contentType', function ($query) {
                    $query->where('name', 'Цитата');
                })->get();
                break;
            case 'link':
                $posts = Post::whereHas('contentType', function ($query) {
                    $query->where('name', 'Ссылка');
                })->get();
                break;
            case 'all':
            default:
                $posts = Post::orderBy('created_at', 'desc')->get();
                break;
    }
        return view('popular', compact('posts', 'filter'));
    }

}
