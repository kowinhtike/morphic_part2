<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function tags()
{
    return $this->morphToMany(Tag::class, 'taggable');
}
}
