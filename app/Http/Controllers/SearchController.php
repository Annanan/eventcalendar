<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Event;

use Request;


class SearchController extends Controller
{
    public function search(Request $request) {
        //送られてきたデータ（都道府県ごとの数字）＝　SQLのprefectureNUM 的な感じ
        
        $checkboxnums = $_POST['search'];
        // $checkboxnum = $request::all();  //やや不安　２つ以上の時の表示がどうなるのか
        
        foreach((array)$checkboxnums as $checkboxnum) {    
            //どうやって一個ずつ渡そう、今番号後ろのやつが上書きしてる
            
            $search_events = \DB::table('events')->select('*')->where('prefecturenum', $checkboxnum)->get();
        
        }
        
        return view('search.search', [
            'search_events' => $search_events,
        ]);
        
    }
}
