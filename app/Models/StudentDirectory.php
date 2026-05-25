<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDirectory extends Model
{
    protected $table = 'student_directories';

    protected $primaryKey = 'intAutoNo';

    public $incrementing = true;

    public $timestamps = false;

    protected $guarded = [];
}
