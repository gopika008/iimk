<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'designation',
        'office',
         'highest_education',
        'area',
        'phone',
        'email',
        'profile_url',
        'photo',
        'qualification',
        'experience',
        'profile',
        'profile_sections'
    ];


    protected $casts = [
        'profile_sections' => 'array',
        'name' => 'array',
        'designation' => 'array',
        'office' => 'array',
            'highest_education' => 'array',
        'area' => 'array',
        'qualification' => 'array',
        'experience' => 'array',
        'profile' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function contents()
    {
        return $this->hasMany(FacultyContent::class);
    }
}
