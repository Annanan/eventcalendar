<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">

@if (Auth::user()->event_favotteru($event->id))
        {!! Form::open(['route' => ['user.unfavoru', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('マイカレンダーから外す', ['class' => "w3-blue-grey w3-button w3-wide", 'style' => "float: left", 'font-family'=> "Mplus 1p"]) !!}
        {!! Form::close() !!}
    @include('favorites.boshu_button')
    &nbsp;
@else
        {!! Form::open(['route' => ['user.favoru', $event->id]]) !!}
            {!! Form::submit('マイカレンダーに追加する', ['class' => "w3-black w3-button w3-wide", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
        &nbsp;  
@endif

<li class="w3-black w3-button w3-wide"><a href="{{ route('mypage.mycalendar', Auth::id()) }}">マイカレンダーを見る</a></li>
 

