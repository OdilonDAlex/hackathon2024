<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Share extends Model
{
    /** @use HasFactory<\Database\Factories\ShareFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'mediaPath',
        'authorId'
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'authorId');
    }
}
