<?php

namespace App;

use App\Photo;
use App\Post;
use App\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // One to one relationship
    public function post()
    {
        return $this->hasOne(Post::class);
    }

    // One to many relationship
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Many to many relationship
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // Polymorphic relationship
    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }
}
