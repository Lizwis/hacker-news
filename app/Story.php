<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $guarded = [];
    protected $primaryKey = "story_id";

    public function comments()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
