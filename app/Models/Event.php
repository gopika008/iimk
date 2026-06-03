<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'type',
        'start_date',
        'end_date',
        'venue',
        'banner',
        'brochure',
        'description',
        'registration_url',
        'is_active',
        'programme_id',
        'gallery',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean',
         'gallery' => 'array',
    ];
    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
