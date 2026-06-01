<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    public function policies()
    {
        return $this->hasMany(ProgrammePolicy::class);
    }
    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function students()
    {
        return $this->hasMany(StudentDirectory::class);
    }
}
