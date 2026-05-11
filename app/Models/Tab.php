<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $fillable = ['name', 'slug', 'order'];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    protected $casts = [
        'name' => 'array',
    ];
}
