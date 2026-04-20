<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTab extends Model
{
    protected $table = 'course_tabs';

    protected $fillable = [
        'course_id',
        'title',
        'slug',
        'content',
        'position',
        'is_active'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}