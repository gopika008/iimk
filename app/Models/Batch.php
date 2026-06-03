<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'programme_id',
        'name',
        'start_year',
        'end_year',
    ];
    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function students()
    {
        return $this->hasMany(StudentDirectory::class);
    }
}
