@extends('layouts.app2')
 

@section('content')
<br>

<h3 style="text-align:center"><?php
print " 「    ";
foreach ($prefectures as $num){
   
    $object=\DB::table('events')->select('prefecture')->where('prefecturenum',$num)->get()->first();
    $prefname= $object->prefecture;
    print_r  ($prefname);
    print"   "  .PHP_EOL ;} 
    
    print "」 のイベント一覧"
    ?>
    
    </h3>
        
        <div class="col-xs-12">
            @include('calendar.kensakucalendar',['events' => $search_events])
        </div>

@endsection
