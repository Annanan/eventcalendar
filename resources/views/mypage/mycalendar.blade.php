@extends('layouts.app2')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
@section('content')
<br>

<p style="font-size:25px"  class='boshu'>[{{ $user->name }}さんのマイカレンダー]</p>


 
        <div class="col-xs-12">
            @include('commons.mypagecalendar', ['events' => $event_favorites, 'user' => $user ])
        
    
@endsection

