<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Аттрибуты, которые можно массово присваивать
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    /**
     * Функция добавляет на сайт время существования аккаунта
     * @return Carbon
     */
    public function registeredFor(): Carbon
    {
        return Carbon::parse($this->created_at);
    }

    /**
     * Функция определяет отношение "один ко многим" с моделью Post
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Отношение к модели Comment
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Отношение к модели Subscription
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Subscription::class, 'user_id', 'id');
    }

    public function subscribedTo(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Subscription::class, 'subscribed_to_id', 'id');
    }

    /**
     * Отношение к таблице likes
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Отношение к модели messages
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Message::class, 'recipient_id')
            ->orWhere('sender_id', $this->id);
    }

    /**
     * Отношение к модели Message - отправитель
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    /**
     * Отношение к модели Message - получатель
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }

    /**
     * Отношение к модели post
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function feedPosts(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Post::class, Subscription::class, 'user_id', 'user_id', 'id', 'subscribed_to_id');
    }

}

