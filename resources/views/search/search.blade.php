@extends('layouts.app2')
 

@section('content')

<p>検索結果　</p>

<?php

print "検索条件:";
foreach ($prefectures as $num){
   
    $object=\DB::table('events')->select('prefecture')->where('prefecturenum',$num)->get()->first();
    $prefname= $object->prefecture;
    print_r  ($prefname);
    print"、"  .PHP_EOL ;} 
    
    ?>
    


        
        <div class="col-xs-12">
            

            @include('commons.calendar',['events' => $search_events])
        </div>

@endsection
