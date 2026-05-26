<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaCoverage extends Model
{
    protected $fillable = [
        'title',
        'description',
        'paper',
        'link',
        'date',
        'image',
        'type',
        'status',
    ];
}
