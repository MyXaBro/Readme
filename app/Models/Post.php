<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'quote_author',
        'image',
        'video',
        'link',
        'created_at',
        'views',
        'content_type_id'
    ];

    /**
     * Функция устанавливает связь с моделью user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Функция устанавливает связь с моделью content_types
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ContentType::class);
    }

    /**
     * Функция устанавливает связь с таблицей hashtags
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hashtags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Hashtag::class);
    }

    /**
     * Функция устанавливает связь с таблицей comments
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Функция устанавливает связь с таблицей likes
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Возвращает кол-во лайков для поста
     * @return mixed
     */
    public function getLikesCountAttribute(): mixed
    {
        return $this->likes->count();
    }

    /**
     * Отношение к модели user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('reposts_count');
    }

}
