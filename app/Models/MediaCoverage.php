<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
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
     use HasTranslations;

    public array $translatable = [
        'title',
        'description',
        'paper',
    ];
}
