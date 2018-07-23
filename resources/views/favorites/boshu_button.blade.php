<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">

<div class=add>
@if (Auth::user()->boshuchu($event->id))
        {!! Form::open(['route' => ['user.unboshu', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('募集をやめる', ['class' => "w3-grey w3-button w3-wide", 'style' => "float: left; margin-left: 10px;"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['user.boshu', $event->id]]) !!}
            {!! Form::submit('募集する', ['class' => "w3-black w3-button w3-wide", 'style' => "float: left; margin-left: 10px;"]) !!}
        {!! Form::close() !!}
@endif
</div>
