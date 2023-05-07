<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Like extends Model
{
    protected $fillable = [
            'user_id',
            'post_id'
        ];

    /**
     * Отношение к таблице post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Отношение к таблице user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
