
@if (Auth::user()->event_favotteru($event->id))
        {!! Form::open(['route' => ['user.unfavoru', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('マイカレンダーから外す', ['class' => "btn btn-danger btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
    @include('favorites.boshu_button')
@else
        {!! Form::open(['route' => ['user.favoru', $event->id]]) !!}
            {!! Form::submit('マイカレンダーに追加する', ['class' => "btn btn-primary btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@endif
