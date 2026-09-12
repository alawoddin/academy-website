<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstructorCourseOutline extends Model
{
    protected $guarded = [];

    public function course(): BelongsTo
    {
        return $this->belongsTo(InstructorCourse::class, 'instructor_course_id');
    }
}
