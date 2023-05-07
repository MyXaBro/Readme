<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{
    private $comment;

    /**
     * Контроллер для успешной работы комментариев
     * @param Comment $comment
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Метод для показа комментариев на странице
     * @param $postId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function showComments($postId): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $comments = $this->comment->where('post_id', $postId)->get();
        return view('profile.comments', ['comments' => $comments]);
    }

    /**
     * Сохранение комментариев в таблицу comments
     * @param Request $request
     * @param $postId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, $postId): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'content' => 'required'
        ], [
            'content.required' => 'Вы не ввели комментарий!'
        ]);

        $this->comment->content = $request->input('content');
        $this->comment->user_id = Auth::id();
        $this->comment->post_id = $postId;
        $this->comment->save();

        return redirect()->back();
    }
}
