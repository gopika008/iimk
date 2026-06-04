<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'achieved_on',
        'organization',
        'is_featured',
    ];
    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
