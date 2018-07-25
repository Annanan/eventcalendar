@extends('layouts.app2')
 

@section('content')

@include('commons.navbar3')     
        
        <div class="col-xs-12">
            

             @include('calendar.geijutsucalendar',['events' => $geijutsu_events])
             
        </div>
    

@endsection
