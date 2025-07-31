<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Author
    use HasFactory;
    protected static function booted()
    {
        // static::addGlobalScope('is_published', function ($query) {
        //     $query->where('is_published', true)
        //         // ->where('published_at', '<=', now())
        //         ->orderByDesc('published_at');
        // });
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getMediaThumbnailAttribute()
    {
        return $this->thumbnail_url ? [
            'xmlns$media' => "http://search.yahoo.com/mrss/",
            'url' => $this->thumbnail_url,
            'height' => 72,
            'width' => 72
        ] : null;
    }
    protected $casts = [
        'published_at' => 'datetime:c',
        'updated_at' => 'datetime:c',
        // 'links' => 'array'
    ];
    // public function getRouteKeyName()
    // {
    //     return 'slug'; // This tells Laravel to use "slug" instead of "id"
    // }


    protected $guarded = [];
}
