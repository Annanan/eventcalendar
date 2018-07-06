<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'loginid', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function eventfavorites()
    {
        return $this->hasMany(Event::class);
    }
    
    public function event_favo($eventId)
{
    $exist = $this->event_favotteru($eventId);

    if ($exist) {
        return false;
    } else {
        $this->eventfavorites()->attach($eventId);
        return true;
    }
}

public function event_unfavo($eventId)
{
    $exist = $this->event_favotteru($eventId);

    if ($exist) {
        $this->eventfavorites()->detach($eventId);
        return true;
    } else {
        return false;
    }
}


public function event_favotteru($eventId) {
    return $this->eventfavorites()->where('event_id', $eventId)->exists();
}
}
