@extends('layouts.app')
 

@section('content')

@include('commons.prefecture')
        
        <div class="col-xs-12">
            <ul class="nav nav-tabs nav-justified">
                
                <li role="presentation" class="{{ Request::is('zenbu') ? 'active' : '' }}"><a href="{{ route('events.events') }}">全ジャンル</a></li>
                <li role="presentation" class="{{ Request::is('omatsuri') ? 'active' : '' }}"><a href="{{ route('events.omatsuri') }}">　お祭り・花火大会 </a></li>
                <li role="presentation" class="{{ Request::is('eiga') ? 'active' : '' }}"><a href="{{ route('events.eiga') }}">映画 </a></li>
                <li role="presentation" class="{{ Request::is('sports') ? 'active' : '' }}"><a href="{{ route('events.sports') }}">スポーツ</a></li>
                <li role="presentation" class="{{ Request::is('ongaku') ? 'active' : '' }}"><a href="{{ route('events.ongaku') }}">音楽</a></li>
                <li role="presentation" class="{{ Request::is('gurume') ? 'active' : '' }}"><a href="{{ route('events.gurume') }}">グルメ</a></li>
                <li role="presentation" class="{{ Request::is('geijutsu') ? 'active' : '' }}"><a href="{{ route('events.geijutsu') }}">芸術</a></li>
                <li role="presentation" class="{{ Request::is('leisure') ? 'active' : '' }}"><a href="{{ route('events.leisure') }}">その他</a></li>  

            </ul>

            @include('commons.calendar', ['events' => $events])  
        </div>

@endsection
