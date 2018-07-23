@extends('layouts.app2')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
@section('content')
<br>
<p style="font-size:25px">[{{ $user->name }}さんのマイカレンダー]</p>　<p class = 'boshu1'> ※募集中のイベントは背景がピンクです</p> 

        <div class="col-xs-12">
            @include('commons.mypagecalendar', ['events' => $event_favorites, 'user' => $user ])
        </div>
    
@endsection

