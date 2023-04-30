<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $registeredFor = $user->registeredFor()->locale('ru')->diffForHumans();
        return view('profile', compact('registeredFor'));
    }

}
