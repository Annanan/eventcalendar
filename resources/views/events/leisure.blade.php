@extends('layouts.app2')
 

@section('content')

@include('commons.navbar3')     
        
        <p></p>
        <div class="col-xs-12">
            

            @include('calendar.leisurecalendar',['events' => $leisure_events])
           
        </div>
    

@endsection
