@extends('layouts.app2')

@section('content')



<p>検索結果　</p>

<?php

print "検索条件:";
foreach ($prefectures as $num){
    $number=\DB::table('events')->select('prefecture')->where('prefecturenum',$num)->get()->first();
    
    print_r ($number)  .PHP_EOL  ;} ?>


        
        <div class="col-xs-12">
            

            @include('commons.calendar',['events' => $search_events])
        </div>

@endsection
