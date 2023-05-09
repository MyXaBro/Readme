<?php

use App\Http\Controllers\AddLinkController;
use App\Http\Controllers\AddPhotoController;
use App\Http\Controllers\AddQuoteController;
use App\Http\Controllers\AddTextController;
use App\Http\Controllers\AddVideoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
})->middleware('guest');

Route::get('/login-validation', function () {
    return view('login-validation');
})->middleware('guest');

Route::get('/no-results', function () {
    return view('no-results');
})->middleware('auth');

Route::get('/popular', [PostController::class, 'index'])->name('popular')->middleware('auth');
Route::get('/popular/{sort}', [PostController::class, 'sort'])->name('popular.sort')->middleware('auth');
Route::get('/popular/{filter}', [PostController::class, 'filter'])->name('popular.filter')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth');

Route::get('/registration', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/registration', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/adding-post', function () {return view('adding-post');})->middleware('auth');

Route::get('/adding-post/photo', [AddPhotoController::class, 'create'])->middleware('auth')->name('add-photo');
Route::post('/adding-post/photo', [AddPhotoController::class, 'store'])->middleware('auth')->name('store');

Route::get('/adding-post/video', [AddVideoController::class, 'create'])->middleware('auth')->name('add-video');
Route::post('/adding-post/video', [AddVideoController::class, 'store'])->middleware('auth');

Route::get('/adding-post/text', [AddTextController::class, 'create'])->middleware('auth')->name('add-text');
Route::post('/adding-post/text', [AddTextController::class, 'store'])->middleware('auth');

Route::get('/adding-post/quote', [AddQuoteController::class, 'create'])->middleware('auth')->name('add-quote');
Route::post('/adding-post/quote', [AddQuoteController::class, 'store'])->middleware('auth');

Route::get('/adding-post/link', [AddLinkController::class, 'create'])->middleware('auth')->name('add-link');
Route::post('/adding-post/link', [AddLinkController::class, 'store'])->middleware('auth');

Route::get('/post-details/{id}', [PostController::class, 'show'])->middleware('auth')->name('post-details');
Route::get('/post-details/{id}/add-view', [PostController::class, 'addView'])->middleware('auth')->name('post.add-view');

Route::get('/post-details/{postId}', [CommentController::class, 'showComments'])->middleware('auth')->name('comments.show');
Route::post('/comments/{postId}', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');

Route::get('/profile/{id}', [ProfileController::class, 'profile'])->middleware('auth')->name('profile');

Route::match(['post', 'delete'], 'subscribe/{id}', [SubscriptionController::class, 'subscribe'])->middleware('auth')->name('subscribe');
Route::delete('/unsubscribe/{id}', [SubscriptionController::class, 'unsubscribe'])->middleware('auth')->name('unsubscribe');

Route::post('/likes/{post_id}', [LikeController::class, 'store'])->middleware('auth')->name('likes.store');

Route::get('/search-results', [SearchController::class, 'index'])->middleware('auth')->name('search.index');

Route::get('/messages', [MessageController::class, 'contacts'])->middleware('auth')->name('messages');
Route::post('/messages', [MessageController::class, 'store'])->middleware('auth')->name('messages.store');

Route::get('/feed', [FeedController::class, 'index'])->middleware('auth')->name('feed');

Route::post('/repost/{postId}', [PostController::class, 'repost'])->middleware('auth')->name('posts.repost');
