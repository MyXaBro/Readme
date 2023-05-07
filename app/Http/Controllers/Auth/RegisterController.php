<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
    public function store(UserRequest $request, Hasher $hasher): mixed
    {
        $request->validated();

        $user = app(User::class, [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hasher->make($request->password),
        ]);


        if ($request->hasFile('avatar'))
        {
            $filename = time() . "." . $request->file('avatar')->getClientOriginalExtension();

            $request->file('avatar')->storeAs('public', $filename);

            Image::make($request->file('avatar'))->resize(300, 300)
                ->save(storage_path('app/public/' . $filename));

            $user->avatar = $filename;
        }

        $user->save();

        Auth::login($user);

        return redirect()->route('profile', ['id' => $user->id]);
    }

}
