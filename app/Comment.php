<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function story()
    {
        return $this->belongsTo(Story::class, 'story_id', 'parrent_id');
    }
}
