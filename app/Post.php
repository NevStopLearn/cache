<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Post extends Model
{
    protected $fillable = [
        'title', 'user_id', 'visit_times'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getVisitedNumberAttribute()
    {
        $key = 'post.visited.'.$this->id;

        Cache::rememberForever($key, function() {
            return $this->visit_times;
        });

        return Cache::increment($key);
    }
}
