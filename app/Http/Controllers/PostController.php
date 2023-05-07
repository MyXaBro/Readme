<?php

namespace App\Http\Controllers;


use App\Models\Hashtag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


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
        $hashtags = Hashtag::all();
        $comments = $post->comments()->get();
        return view('post-details', compact('post', 'user', 'postCount', 'hashtags', 'comments'));
    }

    /**
     * Репост поста пользователя
     * @return \Illuminate\Http\RedirectResponse
     */
    public function repost(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $post = Post::findOrFail($id);
        $user = Auth::user();

        $newPost = new Post;
        $newPost->user_id = $user->id;
        $newPost->content = $post->content;

        $newPost->save();

        return redirect()->route('post-details.show', ['id' => $newPost->id]);
    }

    /**
     * Получаем информацию о пользователе из модели User вместе с датой создания поста
     * @param $userId
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    private function getUserInfo($userId)
    {
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
}
