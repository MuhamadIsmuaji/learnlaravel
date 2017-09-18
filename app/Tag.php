<?php

namespace App;

use App\Post;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Polymorphic many to many relationship
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    // Polymorphic many to many relationship
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
