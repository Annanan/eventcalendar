@if (Auth::user()->boshuchu($event->id))
        {!! Form::open(['route' => ['user.unboshu', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('募集をやめる', ['class' => "btn btn-danger btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['user.boshu', $event->id]]) !!}
            {!! Form::submit('募集する', ['class' => "btn btn-primary btn-xs", 'style' => "float: left"]) !!}
        {!! Form::close() !!}
@endif
