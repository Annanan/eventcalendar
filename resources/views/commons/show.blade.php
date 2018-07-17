@extends('layouts.app')

@section('content')

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

<br>

  <h1>{{$event->name}}</h1><br>
  
  <p>日付：　{{$event->eventdate}} 日</p><br>
  <p>都道府県：　{{$event->prefecture}}</p><br>
  <p>時間：　{{$event->time}}</p><br>
  <p>場所：　{{$event->place}}</p><br>
  <p>詳細：　{{$event->description}}</p><br>
  <p>料金：　{{$event->price}}</p><br>
  <p>ジャンル：　{{$event->genre}}</p><br>
  
  
</div>

@if(Auth::check())
@include('favorites.favorite_button', ['event' => $event])

//改行したい

<h3>募集しているユーザー一覧</h3>
@foreach($users as $user)
<p>{{$user->name}}</p>
@endforeach


@endif

@endsection