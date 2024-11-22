<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $fillable = [
        'content'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'authorId');
    }

    public function subjects(): BelongsTo{
        return $this->belongsTo(Subject::class, 'subjectId');
    }

    public function reactions(): HasMany {
        return $this->hasMany(Reaction::class, 'commentId');
    }
}
