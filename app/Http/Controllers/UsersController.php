<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\User;

use App\Event;

use Auth;

class UsersController extends Controller
{
    public function mycalendar() {
        return view('mypage.mycalendar');
    }
    
  //カレンダーに送るデータをふぁぼったイベントにする。
  //ログインしているユーザーが自分自身のお気に入りしか見えないようにする。
  
    public function event_favorites()
    {
        if (Auth::check()) {
        
        $user = Auth::user(); //ログインしている人間
        $event_favorites = $user->event_favorites; //やや不安

        // $data += $this->counts($user);

        return view('mypage.mycalendar',  ['event_favorites' => $event_favorites, ]);
    }
    }
}
