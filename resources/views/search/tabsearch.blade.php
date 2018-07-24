@extends('layouts.app2')


@section('content')

<h3  style = 'text-align:center'>
<?php

print " {$search_event->prefecture}　のイベント一覧  ";


?></h3>
        
        <div class="col-xs-12">
            

            @include('calendar.kensakucalendar',['events' => $search_events])
        </div>

@endsection
