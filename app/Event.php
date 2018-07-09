<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class, 'event_favorites', 'event_id', 'user_id')->withTimestamps();
        // よくわかっていない
    }
}
