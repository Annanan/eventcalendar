@extends('layouts.app2')


@section('content')
@include('commons.navbar3')

<h3  style = 'text-align:center'>
<?php

print " {$search_event->prefecture}　のイベント一覧  ";


?></h3>
<br>
        
        <div class="col-xs-10 ">
            @include('calendar.kensakucalendar',['events' => $search_events])
        </div>

@endsection
