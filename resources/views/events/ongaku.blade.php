@extends('layouts.app')
 

@section('content')

@include('commons.prefecture')   
        
        <div class="col-xs-12">
            <ul class="nav nav-tabs nav-justified">
                
                <li role="presentation" class="{{ Request::is('events/*/omatsuri') ? 'active' : '' }}"><a href="{{ route('events.omatsuri') }}">　お祭り・花火大会 </a></li>
                <li role="presentation" class="{{ Request::is('events/*/eiga') ? 'active' : '' }}"><a href="{{ route('events.eiga') }}">映画 </a></li>
                <li role="presentation" class="{{ Request::is('events/*/sports') ? 'active' : '' }}"><a href="{{ route('events.sports') }}">スポーツ</a></li>
                <li role="presentation" class="{{ Request::is('events/*/ongaku') ? 'active' : '' }}"><a href="{{ route('events.ongaku') }}">音楽</a></li>
                <li role="presentation" class="{{ Request::is('events/*/gurume') ? 'active' : '' }}"><a href="{{ route('events.gurume') }}">グルメ</a></li>
                <li role="presentation" class="{{ Request::is('events/*/geijutsu') ? 'active' : '' }}"><a href="{{ route('events.geijutsu') }}">芸術</a></li>           
                <li role="presentation" class="{{ Request::is('events/*/leisure') ? 'active' : '' }}"><a href="{{ route('events.leisure') }}">その他</a></li>  
            </ul>

            @include('commons.calendar',['events' => $ongaku_events])
        </div>

@endsection
