<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function mycalendar() {
        return view('mypage.mycalendar');
    }
    
    public function event_favorites($id)
    {
        $user = User::find($id);
        $event_favorites = $user->event_favorites()->paginate(50);

        $data = [
            'event_favorites' => $event_favorites,
        ];

        // $data += $this->counts($user);

        return view('mypage.mycalendar', $data);
    }
}
