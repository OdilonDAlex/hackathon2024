<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'authorId');
    }

    public function subjects(): BelongsTo{
        return $this->belongsTo(Subject::class, 'subjectId');
    }
}
