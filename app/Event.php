<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'user_id'];
    
    // public function user()
    // {
    //     return $this->belongsToMany(User::class, 'event_favorites', 'event_id', 'user_id')->withTimestamps();
    //     // よくわかっていない
    // }
    
    public function user() {
        return $this->belongsToMany(User::class, 'boshu', 'event_id', 'user_id')->withTimestamps();
    }
    
    // public function feed_users()
    // {
    //     $boshuchu_users = $this->user()->pluck('users.id')->toArray();
    //     $boshuchu_users[] = $this->id;
    //     return User::whereIn('user_id', $boshuchu_users);
    // }
    
}

