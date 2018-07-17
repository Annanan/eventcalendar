<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user){
    $count_eiga = $user->eiga()->count();
    $count_geijutsu = $user->geijutsu()->count();
    $count_gurume = $user->gurume()->count();
    $count_leisure = $user->leisure()->count();
    $count_omatsuri = $user->omatsuri()->count();
    $count_ongaku = $user->ongaku()->count();
    $count_sports = $user->sports()->count();
    
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
