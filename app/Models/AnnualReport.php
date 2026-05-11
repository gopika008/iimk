<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
   protected $fillable = [
        'year',
        'english_report',
        'hindi_report',
    ];
}
