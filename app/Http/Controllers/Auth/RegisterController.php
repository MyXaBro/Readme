<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function create()
    {
        return view('registration');
    }
    /**
     * Регистрация пользователя
     * @return mixed
     */
    public function store(UserRequest $request)
    {
        $request->validated();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

            Auth::login($user);
            return redirect('/profile');
    }
}
