<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Event;

use Request;


class SearchController extends Controller
{
    public function search(Request $request) {
        //送られてきたデータ（都道府県ごとの数字）＝　SQLのprefectureNUM 的な感じ
       
      if(isset ( $_POST['search'])) {
        
        $checkboxnums = $_POST['search'];  

        $search_events = Event:: whereIn('prefecturenum' ,$checkboxnums)->get(); 
        
        

        return view('search.search', [
            'search_events' => $search_events],['prefectures' => $checkboxnums
        ]);
        
    }
    else{echo "都道府県を選択してください";}
    }
}
