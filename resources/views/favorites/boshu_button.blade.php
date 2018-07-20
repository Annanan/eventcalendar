<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


@if (Auth::user()->boshuchu($event->id))
        {!! Form::open(['route' => ['user.unboshu', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('募集をやめる', ['class' => "w3-grey w3-button w3-wide", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['user.boshu', $event->id]]) !!}
            {!! Form::submit('募集する', ['class' => "w3-black w3-button w3-wide", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@endif
