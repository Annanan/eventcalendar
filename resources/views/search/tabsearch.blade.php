
@extends('layouts.app2')


@section('content')
@include('commons.navbar3')
<br>
<h3 style="text-align:center;font-family: 'Yu Gothic';font-weight: bold;">
<?php

print " {$search_event->prefecture} のイベント一覧  ";


?></h3>
        <br>
        <div class="col-xs-12 ">
            @include('calendar.kensakucalendar',['events' => $search_events])
        </div>

@endsection
