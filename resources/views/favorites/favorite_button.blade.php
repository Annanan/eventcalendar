
@if (Auth::user()->event_favotteru($event->id))
        {!! Form::open(['route' => ['user.unfavoru', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('♡', ['class' => "btn btn-danger btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['user.favoru', $event->id]]) !!}
            {!! Form::submit('♡', ['class' => "btn btn-primary btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@endif