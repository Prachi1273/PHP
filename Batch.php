<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'course_slug',
        'batch_type',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'duration',
        'days',
        'image',
        'enroll_url',
        'is_active',
        'display_order',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'start_time' => 'datetime:H:i:s',
        'end_time' => 'datetime:H:i:s',
        'is_active' => 'boolean',
    ];
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
