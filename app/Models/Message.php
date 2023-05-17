<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Message extends Model
{
    protected $fillable =[
        'content',
        'sender_id',
        'recipient_id'
    ];

    /**
     * Отношение к модели user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Отношение к таблице users - отправитель
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sender(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Отношение к таблице users - получатель
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
