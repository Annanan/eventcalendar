@extends('layouts.app2')

@section('content')



<p>検索結果　</p>

<?php foreach($prefectures as $num){
      $number = Event:: where('prefecturenum' ,$num)->first();
      
      print $number->prefecture .PHP_EOL ;} ?>




        
        <div class="col-xs-12">
            

            @include('commons.calendar',['events' => $search_events])
        </div>

@endsection
