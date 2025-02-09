<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstname',
        'age',
        'role',
        'isAdmin',
        'address',
        'phoneNumber'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function subjects(): HasMany {
        return $this->hasMany(Subject::class, 'authorId');
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class, 'authorId');
    }

    public function reactions(): HasMany{
        return $this->hasMany(Reaction::class, 'authorId');
    }

    public function courses(): HasMany {
        return $this->hasMany(Course::class, 'authorId');
    }

    public function rates(): HasMany{
        return $this->hasMany(Rate::class, 'authorId');
    }

    public function quizzes(): BelongsToMany {
        return $this->belongsToMany(Quiz::class, 'quiz_user', 'userId', 'quizId');
    }

    public function shares(): HasMany{
        return $this->hasMany(Share::class, 'authorId');
    }

}
