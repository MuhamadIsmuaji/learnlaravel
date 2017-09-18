<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Many to many relationship
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
