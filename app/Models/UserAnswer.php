<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\UserAnswerFactory> */
    use HasFactory;

    public function answer(): BelongsTo{
        return $this->belongsTo(Answer::class, 'answerId');
    }
}
