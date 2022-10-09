<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}