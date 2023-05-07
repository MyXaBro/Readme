<?php

namespace App\Http\Controllers;


use App\Http\Requests\PhotoRequest;
use App\Models\ContentType;
use Illuminate\Routing\Controller;

class AddPhotoController extends Controller
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
     * Метод для обработки формы photo
     * @param PhotoRequest $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function store(PhotoRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validated();

        $post = auth()->user()->posts()->create([
            'title' => $request->title,
            'link' => $request->link,
            'hashtags' => $request->hashtags,
            'content_type_id' => 1
        ]);

        // Сохранение фото на сервере и запись пути к нему в модель
        if ($request->hasFile('userpic-file-photo'))
        {
            $file = $request->file('userpic-file-photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images/userpic', $filename);
            $post->image = 'storage/images/userpic/' . $filename;
        }

        $post->save();


        return redirect('/post-details/' . $post->id);

    }
}
