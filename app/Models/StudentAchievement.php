<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAchievement extends Model
{
    protected $fillable = [
        'programme_id',
        'batch_id',
        'student_directory_id',
        'achievement_id',
        'achieved_on',
    ];
    public function programme()
    {
        return $this->belongsTo(\App\Models\Programme::class);
    }

    public function batch()
    {
        return $this->belongsTo(\App\Models\Batch::class);
    }

    public function student()
    {
        return $this->belongsTo(
            \App\Models\StudentDirectory::class,
            'student_directory_id'
        );
    }

    public function achievement()
    {
        return $this->belongsTo(\App\Models\Achievement::class);
    }
}
