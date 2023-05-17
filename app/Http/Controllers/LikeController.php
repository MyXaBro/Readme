<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Метод реализует работу лайков
     * @param $post_id
     * @return RedirectResponse
     */
    public function store($post_id): RedirectResponse
    {
        $user_id = Auth::id();

        $existing_like = app(Like::class)->where('user_id', $user_id)
            ->where('post_id', $post_id)
            ->first();

        if (!$existing_like) {
            $like = app(Like::class);
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            $like->save();
        }

        return redirect()->back();
    }
}

