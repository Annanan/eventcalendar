@extends('layouts.app')
 

@section('content')



@include('commons.navbar3')    
        
        <div class="col-xs-12">
            <ul class="tab">
               
                <li class="{{ Request::is('zenbu') ? 'active' : '' }} w3-pale-red w3-button w3-thin"><a href="{{ route('events.events') }}"><span class="">全ジャンル</span></a></li>
                <li class="{{ Request::is('omatsuri') ? 'active' : '' }} w3-pink w3-button w3-thin"><a href="{{ route('events.omatsuri') }}"><span class="glyphicon glyphicon-asterisk"> お祭り・花火大会</span></a></li>
                <li class="{{ Request::is('eiga') ? 'active' : '' }} w3-deep-purple w3-button w3-thin"><a href="{{ route('events.eiga') }}"><span class="glyphicon glyphicon-film">　映画</span> </a></li>
                <li class="{{ Request::is('sports') ? 'active' : '' }} w3-cyan w3-button w3-thin"><a href="{{ route('events.sports') }}"><span class="glyphicon glyphicon-bullhorn"> スポーツ</span></a></li>
                <li class="{{ Request::is('ongaku') ? 'active' : '' }} w3-lime w3-button w3-thin"><a href="{{ route('events.ongaku') }}"><span class="glyphicon glyphicon-music"> 音楽</span></a></li>
                <li class="{{ Request::is('gurume') ? 'active' : '' }} w3-orange w3-button w3-thin"><a href="{{ route('events.gurume') }}"><span class="glyphicon glyphicon-glass"> グルメ</span></a></li>
                <li class="{{ Request::is('geijutsu') ? 'active' : '' }} w3-deep-orange w3-button w3-thin"><a href="{{ route('events.geijutsu') }}"><span class="glyphicon glyphicon-picture">  芸術</span></a></li>
                <li class="{{ Request::is('leisure') ? 'active' : '' }} w3-brown w3-button w3-thin"><a href="{{ route('events.leisure') }}"><span class="glyphicon glyphicon-leaf">  その他</span></a></li>  

               
</ul>
　　　　　　　
            @include('commons.calendar',['events' => $omatsuri_events])
           
        </div>

@endsection
