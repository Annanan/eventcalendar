@extends('layouts.app')
 

@section('content')

@include('commons.prefecture')   
        
        <div class="col-xs-12">
            <ul class="nav nav-tabs nav-justified">
  
  
                <li role="presentation" class="{{ Request::is('zenbu') ? 'active' : '' }}"><a href="{{ route('events.events') }}">全ジャンル</a></li>
                <li role="presentation" class="{{ Request::is('omatsuri') ? 'active' : '' }}"><a href="{{ route('events.omatsuri') }}"><span class="glyphicon glyphicon-asterisk"> お祭り・花火大会</span></a></li>
                <li role="presentation" class="{{ Request::is('eiga') ? 'active' : '' }}"><a href="{{ route('events.eiga') }}"><span class="glyphicon glyphicon-film">　映画</span> </a></li>
                <li role="presentation" class="{{ Request::is('sports') ? 'active' : '' }}"><a href="{{ route('events.sports') }}"><span class="glyphicon glyphicon-bullhorn"> スポーツ</span></a></li>
                <li role="presentation" class="{{ Request::is('ongaku') ? 'active' : '' }}"><a href="{{ route('events.ongaku') }}"><span class="glyphicon glyphicon-music"> 音楽</span></a></li>
                <li role="presentation" class="{{ Request::is('gurume') ? 'active' : '' }}"><a href="{{ route('events.gurume') }}"><span class="glyphicon glyphicon-glass"> グルメ</span></a></li>
                <li role="presentation" class="{{ Request::is('geijutsu') ? 'active' : '' }}"><a href="{{ route('events.geijutsu') }}"><span class="glyphicon glyphicon-picture">  芸術</span></a></li>
                <li role="presentation" class="{{ Request::is('leisure') ? 'active' : '' }}"><a href="{{ route('events.leisure') }}"><span class="glyphicon glyphicon-leaf">  その他</span></a></li>  


　　　　　　</ul>            
            @include('commons.calendar',['events' => $gurume_events])
           
        </div>
    

@endsection
