@extends('layouts.app2')
 

@section('content')

@include('commons.navbar3')   
        
        <div class="col-xs-12">
            
            @include('calendar.sportscalendar',['events' => $sports_events])
        </div>

@endsection
