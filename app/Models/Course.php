<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'authorId',
        'pathToIllustration',
        'published'
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'authorId');
    }

    public function items(): HasMany{
        return $this->hasMany(CourseItem::class, 'courseId');
    }

    public function rates(): HasMany{
        return $this->hasMany(Rate::class, 'courseId');
    }

    public function getIllustration(){
        return Storage::disk('public')->url($this->pathToIllustration);
    }
}
