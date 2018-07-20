<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" >

@if (Auth::user()->event_favotteru($event->id))
        {!! Form::open(['route' => ['user.unfavoru', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('マイカレンダーから外す', ['class' => "w3-blue-grey w3-button w3-wide", 'style' => "float: left", 'font-family'=> "Mplus 1p"]) !!}
        {!! Form::close() !!}
    @include('favorites.boshu_button')
@else
        {!! Form::open(['route' => ['user.favoru', $event->id]]) !!}
            {!! Form::submit('マイカレンダーに追加する', ['class' => "w3-black w3-button w3-wide", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@endif
