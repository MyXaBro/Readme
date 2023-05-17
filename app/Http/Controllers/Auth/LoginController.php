<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\LoginRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

        public function store(LoginRequest $request)
    {
        $validatedData = $request->validated();

        if (Auth::attempt($validatedData)) {
            return redirect()->intended('/main');
        }

        return back()
            ->withInput()
            ->withErrors([
            'email' => 'Неверные email, либо пароль',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
