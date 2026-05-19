<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchNewsletter extends Model
{
    protected $fillable = [
        'title',
        'volume',
        'pdf',
    ];
}
