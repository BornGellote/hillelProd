<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsToMany(Category::class, 'post2category')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post2tag')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}