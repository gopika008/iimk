<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RankingValue extends Model
{
    protected $fillable = [
        'programme_id',
        'ranking_year',
        'rank_scope',
        'rank_value',
        'rank_url',
    ];

    public function programme()
    {
        return $this->belongsTo(RankingProgramme::class, 'programme_id');
    }
}
