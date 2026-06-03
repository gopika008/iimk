<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProgrammeCalendar extends Model
{
    use HasTranslations;
    protected $fillable = [
        'calendar_type',
        'academic_year',
        'programme_title',
        'programme_date',
        'venue',
        'start_date',
        'end_date',
        'fee',
        'fee_type',
        'registration_link',
    ];
    public array $translatable = [
        'programme_title',
        'venue',
    ];

    protected $guarded = [];

    protected $casts = [
        'programme_title' => 'array',
        'venue' => 'array',
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
