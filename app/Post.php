<?php

namespace App;

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
}
