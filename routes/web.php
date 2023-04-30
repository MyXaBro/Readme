<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('index', function () {
    return view('index');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/adding-post', function () {
    return view('adding-post');
});

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login-validation', function () {
    return view('login-validation');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/no-content', function () {
    return view('no-content');
});

Route::get('/no-results', function () {
    return view('no-results');
});

Route::get('/popular', function () {
    return view('popular');
});

Route::get('/post-details', function () {
    return view('post-details');
});

Route::get('/profile', [ProfileController::class, 'profile']);

Route::get('/reg-validation', function () {
    return view('reg-validation');
});

Route::get('/registration', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/registration', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

