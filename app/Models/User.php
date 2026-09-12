<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [];

    public const STATUS_PENDING = 'pending';

    public const STATUS_APPROVED = 'approved';

    public const STATUS_REJECTED = 'rejected';

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isInstructor(): bool
    {
        return $this->role === 'instructor';
    }

    public function isApproved(): bool
    {
        if ($this->isAdmin()) {
            return true;
        }

        return in_array((string) $this->status, [self::STATUS_APPROVED, '1'], true);
    }

    public function isPending(): bool
    {
        return $this->isInstructor() && $this->status === self::STATUS_PENDING;
    }

    public function isRejected(): bool
    {
        return $this->isInstructor() && $this->status === self::STATUS_REJECTED;
    }

    public function team(): HasOne
    {
        return $this->hasOne(Team::class);
    }

    public function instructorCourses(): HasMany
    {
        return $this->hasMany(InstructorCourse::class)->latest();
    }

    public function ensureTeam(): Team
    {
        $image = null;
        if ($this->photo && is_file(public_path('upload/instructor_images/'.$this->photo))) {
            $image = 'upload/instructor_images/'.$this->photo;
        }

        return $this->team()->firstOrCreate([], [
            'name' => $this->name,
            'image' => $image,
        ]);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
}
