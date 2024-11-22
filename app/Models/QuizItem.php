<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuizItem extends Model
{
    /** @use HasFactory<\Database\Factories\QuizItemFactory> */
    use HasFactory;

    public function quiz(): BelongsTo{
        return $this->belongsTo(Quiz::class, 'quizId');
    }

    public function answers(): HasMany{
        return $this->hasMany(Answer::class, 'itemId');
    }
}
