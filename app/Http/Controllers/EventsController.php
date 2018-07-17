<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;




class EventsController extends Controller
{
   
    public function zenbu() {
        // $events = \DB::table('events')->select('*')->get();
        // $event = \DB::table('events')->select('genrenum')->get();
        
        $omatsuri_events = \DB::table('events')->select('*')->where('genre', 'お祭り・花火大会')->get();
        $eiga_events = \DB::table('events')->select('*')->where('genre', '映画')->get();
        $leisure_events = \DB::table('events')->select('*')->where('genre', 'レジャー')->get();
        $sports_events = \DB::table('events')->select('*')->where('genre', 'スポーツ')->get();
        $ongaku_events = \DB::table('events')->select('*')->where('genre', '音楽フェス')->get();
        $gurume_events = \DB::table('events')->select('*')->where('genre', 'グルメ')->get();
        $geijutsu_events = \DB::table('events')->select('*')->where('genre', '芸術')->get();
        
        $data = [ 
            'omatsuri_event' => $omatsuri_events
            'eiga_events' => $eiga_events
            ]
        $event += $this->counts($event);

        
        return view('welcome', [
            'events' => $events,
            'event' => $event,
        ]);
    }
    
    public function omatsuri() {
        
        $omatsuri_events = \DB::table('events')->select('*')->where('genre', 'お祭り・花火大会')->get();
        
        return view('events.omatsuri', [
            'omatsuri_events' => $omatsuri_events,
        ]);
    }
    
    public function eiga() {
        
        $eiga_events = \DB::table('events')->select('*')->where('genre', '映画')->get();
        
        return view('events.eiga', [
            'eiga_events' => $eiga_events,
        ]);
    }
    
    public function leisure() {
        
        $leisure_events = \DB::table('events')->select('*')->where('genre', 'レジャー')->get();
        
        return view('events.leisure', [
            'leisure_events' => $leisure_events,
        ]);
    }
    
    public function sports() {
        
        $sports_events = \DB::table('events')->select('*')->where('genre', 'スポーツ')->get();
        
        return view('events.sports', [
            'sports_events' => $sports_events,
        ]);
    }
    
    public function ongaku() {
        
        $ongaku_events = \DB::table('events')->select('*')->where('genre', '音楽フェス')->get();
        
        return view('events.ongaku', [
            'ongaku_events' => $ongaku_events,
        ]);
    }
    
    public function gurume() {
        
        $gurume_events = \DB::table('events')->select('*')->where('genre', 'グルメ')->get();
        
        return view('events.gurume', [
            'gurume_events' => $gurume_events,
        ]);
    }
    
    public function geijutsu() {
        
        $geijutsu_events = \DB::table('events')->select('*')->where('genre', '芸術')->get();
        
        return view('events.geijutsu', [
            'geijutsu_events' => $geijutsu_events,
        ]);
    }
    
    public function show($id) {
        
        $event = Event::find($id);
        return view('commons.show', [
            'event'=>$event,
            ]
        );
    }
    
    
}
