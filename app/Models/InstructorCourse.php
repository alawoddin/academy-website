<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InstructorCourse extends Model
{
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function outlines(): HasMany
    {
        return $this->hasMany(InstructorCourseOutline::class)->orderBy('sort_order')->orderBy('id');
    }
}
