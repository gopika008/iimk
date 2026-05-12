<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'description',
        'type',
        'type_code',
        'image',
        'url',
    ];
}
