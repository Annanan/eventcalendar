<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZenbuController extends Controller
{
     public function zenbu() {
        
        // // $event = \DB::table('events')->select('genrenum')->get();
        
        // $count_omatsuris = \DB::table('events')->where(['genre', '=','お祭り・花火大会'])->count();
        
        
        
        
        
        // $count_eigas = \DB::table('events')->where('genre', '映画')->count();
        // $leisure_events = \DB::table('events')->where('genre', 'レジャー')->count();
        // $sports_events = \DB::table('events')->where('genre', 'スポーツ')->count();
        // $ongaku_events = \DB::table('events')->where('genre', '音楽フェス')->count();
        // $gurume_events = \DB::table('events')->where('genre', 'グルメ')->count();
        // $geijutsu_events = \DB::table('events')->where('genre', '芸術')->count();
        
        // $data = [ 
        //     'count_omatsuris' => $count_omatsuris,
        //     'count_eigas' => $count_eigas,
        //     'events' => $events,
        //     ];
       
        
        return view('welcome');
    }
}
