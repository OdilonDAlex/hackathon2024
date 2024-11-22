<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rate extends Model
{
    /** @use HasFactory<\Database\Factories\RateFactory> */
    use HasFactory;

    protected $fillable = [
        'value',
        'description',
        'authorId',
        'courseId'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'authorId');
    }

    public function course(): BelongsTo{
        return $this->belongsTo(Course::class, 'courseId');
    }
}
