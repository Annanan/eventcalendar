<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayController extends Controller
{
    public function day($id){
            

    return view(
        'events.day',[
            'date' => $id
            ]
        );
        
    }
}
