@extends('layouts.app2')
 

@section('content')



@include('commons.navbar3')    
        
        <div class="col-xs-12">
            
            @include('calendar.omatsuricalendar',['events' => $omatsuri_events])
           
        </div>

@endsection
