<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Answer extends Model
{
    /** @use HasFactory<\Database\Factories\AnswerFactory> */
    use HasFactory;

    protected $fillable = [
        'value'
    ];

    public function item(): BelongsTo{
        return $this->belongsTo(QuizItem::class, 'itemId');
    }

    public function user_answer(): HasOne{
        return $this->hasOne(UserAnswer::class, 'answerId');
    }
}
