@extends('layouts.app2')
 

@section('content')

@include('commons.prefecture')
 
        <div class="col-xs-12">
            @include('commons.calendar', ['events' => $event_favorites])
        </div>
    
@endsection

