<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammePolicy extends Model
{
    protected $fillable = [
        'programme_id',
        'title',
        'file',
        'is_active',
        'sort_order',
    ];
    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
