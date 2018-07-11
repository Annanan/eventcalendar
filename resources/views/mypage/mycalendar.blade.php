@extends('layouts.app')
 

@section('content')

 
        <div class="col-xs-12">
            @include('commons.calendar', ['events' => $event_favorites])
        </div>
    
@endsection

