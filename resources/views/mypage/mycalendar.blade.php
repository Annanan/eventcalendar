@extends('layouts.app2')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
@section('content')
<br>

<p style="font-size:25px">[{{ Auth::user()->name }}さんのマイカレンダー]</p>

@include('commons.prefecture')
 
        <div class="col-xs-12">
            @include('commons.calendar', ['events' => $event_favorites])
        
    
@endsection

