<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    /** @use HasFactory<\Database\Factories\QuizFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'quiz_user', 'quizId', 'userId');
    }

    public function items(): HasMany{
        return $this->hasMany(QuizItem::class, 'quizId');
    } 
}
