@extends('layouts.app2')
 

@section('content')

<div class="alert alert-info" role="alert">{{ Auth::user()->name }}さんのマイカレンダー</div>

@include('commons.prefecture')
 
        <div class="col-xs-12">
            @include('commons.calendar', ['events' => $event_favorites])
        </div>
    
@endsection

