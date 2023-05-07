<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\LikeController;
use App\Models\Like;
use App\Models\Subscription;
use App\Models\Hashtag;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Функция выводит все необходимые данные для представления о профиле пользователя
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function profile($id)
    {
        $user = User::find($id);
        $registeredFor = $user->registeredFor()->locale('ru')->diffForHumans();
        $postCount = $user->posts()->count();
        $posts = $user->posts()->latest()->get();
        $hashtags = Hashtag::all();
        $comments = $user->comments()->latest()->get();
        $subscriptions = Subscription::where('subscribed_to_id', $user->id)->get();
        $likes = Like::whereIn('post_id', $posts->pluck('id'))->get();

        $subscribed = $user->subscriptions->where('subscribed_to_id', $user->id);

        return view('profile', compact('user', 'registeredFor', 'postCount', 'hashtags', 'comments', 'subscriptions', 'subscribed', 'likes'))->with('posts', $posts);
    }

}

