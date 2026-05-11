<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'short_description',
        'image',
        'link_url',
        'link_name',
        'publish_date',
        'expiry_date',
        'show_on_homepage',
        'display_order',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'title' => 'array',
        'short_description' => 'array',
        'link_name' => 'array',
    ];

      public function category()
    {
        return $this->belongsTo(AnnouncementCategory::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    protected static function booted()
    {
        static::creating(function ($announcement) {
            $announcement->slug = Str::slug( $announcement->title['en'] ?? '');
            $announcement->created_by = auth()->id();
        });

        static::updating(function ($announcement) {
            $announcement->updated_by = auth()->id();
                // if (isset($announcement->title['en'])) {
                //     $announcement->slug = Str::slug($announcement->title['en']);
                // }
        });
    }

    public function scopeActive($query)
{
    return $query
        ->where('status', 1)
        ->where(function ($q) {
            $q->whereNull('publish_date')
              ->orWhere('publish_date', '<=', now());
        })
        ->where(function ($q) {
            $q->whereNull('expiry_date')
              ->orWhere('expiry_date', '>=', now());
        });
}
}
