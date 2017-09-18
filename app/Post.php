<?php

namespace App;

use App\Photo;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    // default table name is from class name with plural -> posts
    // if want to override table name
    // protected $table = 'posts';

    // default primary key is id
    // if want to override primary key name
    // protected $primaryKey = 'id';

    // mass assignment
    protected $fillable = ['title', 'content'];

    protected $dates = ['deleted_at'];

    // One to many relationship (inverse)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Polymorphic relationship
    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }

    // Polymorphic many to many relationship
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
