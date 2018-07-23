@extends('layouts.app2')


@section('content')

<p>検索結果　</p>

<?php

print "検索条件: 　{$search_event->prefecture}　 ";


?>

        
        <div class="col-xs-12">
            

            @include('commons.calendar',['events' => $search_events])
        </div>

@endsection
