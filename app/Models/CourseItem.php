<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseItem extends Model
{
    /** @use HasFactory<\Database\Factories\CourseItemFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'valuePath'
    ];

    public function course(): BelongsTo{
        return $this->belongsTo(Course::class, 'courseId');
    }
}
