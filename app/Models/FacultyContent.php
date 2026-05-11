<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyContent extends Model
{
    protected $fillable = [
        'faculty_id',
        'section_id',
        'content',
    ];
    protected $casts = [
        'content' => 'array',
    ];
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
