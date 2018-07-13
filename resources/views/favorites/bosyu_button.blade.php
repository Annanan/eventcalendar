@if (Auth::user()->bosyuchu($event->id))
        {!! Form::open(['route' => ['user.unbosyu', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('募集取り消し', ['class' => "btn btn-danger btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['user.bosyu', $event->id]]) !!}
            {!! Form::submit('募集する', ['class' => "btn btn-primary btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@endif
