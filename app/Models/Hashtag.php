<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Hashtag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_at',
    ];

    /**
     * Отношение многое ко многим с таблицей posts
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

}
