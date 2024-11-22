<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'authorId');
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class, 'subjectId');
    }

    public function reactions(): HasMany{
        return $this->hasMany(Reaction::class, 'subjectId');
    }
}

