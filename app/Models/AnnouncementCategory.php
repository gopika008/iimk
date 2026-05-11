<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class AnnouncementCategory extends Model
{
    protected $fillable = [
        'name',
        'display_order'
    ];
    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'category_id');
    }


    protected static function booted()
    {
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
}
