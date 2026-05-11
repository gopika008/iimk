<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'tab_id',       // positions, research, awards
        'heading',   // Academic Positions
        'order',
    ];
    protected $casts = [
        'heading' => 'array',
    ];
    public function contents()
    {
        return $this->hasMany(FacultyContent::class);
    }
    public function tab()
    {
        return $this->belongsTo(Tab::class);
    }
}
