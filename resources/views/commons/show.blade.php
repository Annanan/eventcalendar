<head>
<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">
</head>
@extends('layouts.app2')

@section('content')
<body>

<div class=eventkuwashiku>
<div class="col-xs-12">

    
  <h1>{{$event->name}}</h1><br>
  
  <span class="glyphicon glyphicon-calendar">：{{$event->eventdate}}日</span><br><br><br>
  <span class="glyphicon glyphicon-time">：{{$event->time}}</span><br><br><br>
  <span class="glyphicon glyphicon-map-marker">：{{$event->prefecture}} {{$event->place}}</span><br><br><br>
  <span class="glyphicon glyphicon-list-alt">：{{$event->description}}</span><br><br><br>
  <span class="glyphicon glyphicon-usd">：{{$event->price}}</span><br><br><br>
  <span class="glyphicon glyphicon-book">：{{$event->genre}}</span><br><br><br>
  
</div>

@if(Auth::check())
@include('favorites.favorite_button', ['event' => $event])
<li class="w3-gray w3-button w3-wide"><a href="{{ route('mypage.mycalendar', Auth::id()) }}">マイカレンダーを見る</a></li> 
</div>

<div class=boshuchu>

<h3>募集しているユーザー一覧</h3><br>
@foreach($users as $user)
<span class="glyphicon glyphicon-user">{{$user->name}} ({{$user->group}})</span><br><br>
@endforeach
</div>

@endif
</body>
@endsection