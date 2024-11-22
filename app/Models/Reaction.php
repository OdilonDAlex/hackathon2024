<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reaction extends Model
{
    /** @use HasFactory<\Database\Factories\ReactionFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'authorId',
        'commentId',
        'subjectId'
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'authorId');
    }

    public function subject(): BelongsTo{
        return $this->belongsTo(Subject::class, 'subjectId');
    }

    public function comment(): BelongsTo{
        return $this->belongsTo(Comment::class, 'commentId');
    }
}
