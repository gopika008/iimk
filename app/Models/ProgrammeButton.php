<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammeButton extends Model
{
    protected $fillable = [
        'programme_id',
        'label',
        'url',
        'new_tab',
        'is_active',
        'sort_order',
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
