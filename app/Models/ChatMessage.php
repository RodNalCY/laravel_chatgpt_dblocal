<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMessage extends Model
{
    use HasFactory;

    protected $fillable = ['chat_id', 'message', 'sender', 'message_id'];

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }
}
