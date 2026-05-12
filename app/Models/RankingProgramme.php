<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RankingProgramme extends Model
{
     protected $fillable = [
        'programme_name',
        'ranking_type',
        'category_id',
        'status',
        'sort_order',
    ];

    public function values()
    {
        return $this->hasMany(RankingValue::class, 'programme_id');
    }
}
