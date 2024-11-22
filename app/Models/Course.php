<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'authroId'
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'authorId');
    }

    public function items(): HasMany{
        return $this->hasMany(CourseItem::class, 'courseId');
    }
}
