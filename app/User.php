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
    
    
      public function event_favorites() {
        return $this->belongsToMany(Event::class, 'event_favorites', 'user_id', 'event_id')->withTimestamps();
    }
    
    // 自分自身が何を募集しているか見れる
    public function bosyus() {
        return $this->belongsToMany(Event::class, 'bosyu', 'user_id', 'event_id')->withTimestamps();
    }
    
   
   //ユーザーがイベントを追加しないので消し 
    // public function events()
    // // {
    // //     return $this->hasMany(Event::class);
    // // }
   
   
   
   
   //⇓ふぁぼる動作だよ
    
    public function event_favo($eventId)
{
    $exist = $this->event_favotteru($eventId);

    if ($exist) {
        return false;
    } else {
        $this->event_favorites()->attach($eventId);
        return true;
    }
}

//⇓ふぁぼ取り消しの動作だよ

public function event_unfavo($eventId)
{
    $exist = $this->event_favotteru($eventId);

    if ($exist) {
        $this->event_favorites()->detach($eventId);
        return true;
    } else {
        return false;
    }
}

//ふぁぼってあるよ

public function event_favotteru($eventId) {
    return $this->event_favorites()->where('event_id', $eventId)->exists();
}

    // thisはユーザーモデルのこと
    public function bosyu($eventId)
{
    $exist = $this->bosyuchu($eventId);

    if ($exist) {
        return false;
    } else {
        $this->bosyus()->attach($eventId);
        return true;
    }
}

public function unbosyu($eventId)
{
    $exist = $this->bosyuchu($eventId);

    if ($exist) {
        $this->bosyus()->detach($eventId);
        return true;
    } else {
        return false;
    }
}

public function bosyuchu($eventId) {
    return $this->bosyus()->where('event_id', $eventId)->exists();
}
}
