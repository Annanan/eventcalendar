@extends('layouts.app')
 

@section('content')

   
        
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                //１行が各ジャンルのタブをあらわす。要ルート変更
                
                <li role="presentation" class="{{ Request::is('events/*/omatsuri') ? 'active' : '' }}"><a href="{{ route('events.omatsuri') }}">　お祭り・花火大会 </a></li>
                <li role="presentation" class="{{ Request::is('events/*/eiga') ? 'active' : '' }}"><a href="{{ route('events.eiga') }}">映画 </a></li>
                <li role="presentation" class="{{ Request::is('events/*/leisure') ? 'active' : '' }}"><a href="{{ route('events.leisure') }}">レジャー</a></li>  
                <li role="presentation" class="{{ Request::is('events/*/sports') ? 'active' : '' }}"><a href="{{ route('events.sports') }}">スポーツ</a></li>
                <li role="presentation" class="{{ Request::is('events/*/ongaku') ? 'active' : '' }}"><a href="{{ route('events.ongaku') }}">音楽</a></li>
                <li role="presentation" class="{{ Request::is('events/*/gurume') ? 'active' : '' }}"><a href="{{ route('events.gurume') }}">グルメ</a></li>
                <li role="presentation" class="{{ Request::is('events/*/geijutsu') ? 'active' : '' }}"><a href="{{ route('events.geijutsu') }}">芸術</a></li>           
            </ul>

            @foreach($ongaku_events as $ongaku_event)
            <p>{!! nl2br(e($ongaku_event->name . ": " . $ongaku_event->prefecture)) !!}</p>
            @endforeach
           
        </div>

@endsection
