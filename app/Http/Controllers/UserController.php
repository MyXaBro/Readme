<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Показ профиля пользователя
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('profile', ['user' => $user]);
    }
}

