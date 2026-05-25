<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammeCalendar extends Model
{
    protected $guarded = [];

    protected $casts = [
        'fee' => 'array',
    ];

    public function faculties()
    {
        return $this->belongsToMany(
            Faculty::class,
            'faculty_programme_calendar',
            'programme_calendar_id',
            'faculty_id'
        );
    }
}

