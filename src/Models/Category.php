<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post()
    {
        return $this->belongsToMany(Product::class, 'post2category')->withTimestamps();
    }
}