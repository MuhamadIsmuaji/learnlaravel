<?php

namespace App;

use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // Polymorphic many to many relationship
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
