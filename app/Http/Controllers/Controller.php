<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($event){
    $count_eiga = $event->eiga()->count();
    $count_geijutsu = $event->geijutsu()->count();
    $count_gurume = $event->gurume()->count();
    $count_leisure = $event->leisure()->count();
    $count_omatsuri = $event->omatsuri()->count();
    $count_ongaku = $event->ongaku()->count();
    $count_sports = $event->sports()->count();
    
    return [
            'count_eiga' => $count_eiga,
            'count_geijutsu' => $count_geijutsu,
            'count_gurume' => $count_gurume,
            'count_leisure' => $count_leisure,
            'count_omatsuri' => $count_omatsuri,
            'count_ongaku' => $count_ongaku,
            'count_sports' => $count_sports,
           
            ];
    }
    
}
