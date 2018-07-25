@extends('layouts.app2')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
@section('content')
<br>
<p style="font-size:25px">&nbsp;<img src="/onna.png" alt="EVENTMOURAKUN" width="30" height="44">&nbsp;{{ $user->name }}さんのマイカレンダー</p>
<p class = 'boshu1'> ※{{ $user->name }}さんが募集しているイベントは背景がピンクです</p> 
        <div class="col-xs-12">
            @include('commons.mypagecalendar', ['events' => $event_favorites, 'user' => $user ])
        </div>
    
@endsection

