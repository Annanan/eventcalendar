<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Event;
use Auth;

class UsersController extends Controller
{
    
  //カレンダーに送るデータをふぁぼったイベントにする。
  //ログインしているユーザーが自分自身のお気に入りしか見えないようにする。
  
    public function event_favorites()
    {
        if (Auth::check()) {
        
        $user = Auth::user(); //ログインしている人間
        $event_favorites = $user->event_favorites; //やや不安
        // $data += $this->counts($user);

        return view('mypage.mycalendar',  ['event_favorites' => $event_favorites, 'user' => $user  ]);
    }
    }
    
    public function show($id)
    {
        $event = Event::find($id);
        
        $users = \DB::table('users')->select('*')->JOIN('boshu', 'users.id', '=', 'boshu.user_id')->where('event_id', $id)->get();
        
    //     $leagues = DB::table('leagues')
    // ->select('league_name')
    // ->join('countries', 'countries.country_id', '=', 'leagues.country_id')
    // ->where('countries.country_name', $country)
    // ->get();

        
        return view('commons.show', [
          'event' => $event,
          'users' => $users,
        ]);
    }
  
    
    public function cover() {
      if (Auth::check()){return view ('welcome');}
      else{return view ('cover3');}
      
    }
    
}
