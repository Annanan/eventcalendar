@extends('layouts.app2')

@section('content')

<div class="col-xs-12">

    
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
<p>(team{{$user->group}})</p>
@endforeach


@endif

@endsection