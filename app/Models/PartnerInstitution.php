<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerInstitution extends Model
{
    protected $fillable = [
    'continent',
    'name',
    'country',
    'city',
    'logo',
    'website',
    'description',
    'sort_order',
    'is_active',
];
}
