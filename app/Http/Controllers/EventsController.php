<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function omatsuri() {
        return view('events.omatsuri');
    }
    
    public function eiga() {
        return view('events.eiga');
    }
    
    public function leisure() {
        return view('events.leisure');
    }
    
    public function sports() {
        return view('events.sports');
    }
    
    public function ongaku() {
        return view('events.ongaku');
    }
    
    public function gurume() {
        return view('events.gurume');
    }
    
    public function geijutsu() {
        return view('events.geijutsu');
    }
}
