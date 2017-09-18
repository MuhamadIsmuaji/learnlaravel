<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // Polimorphic relationship
    public function imageable()
    {
        return $this->morphTo();
    }
}
