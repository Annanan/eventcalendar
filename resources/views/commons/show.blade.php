<head>
<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">
</head>
@extends('layouts.app2')

@section('content')

<br>
<body>


<div class=eventkuwashiku>
 <div class=description>
  <div class="col-xs-12">
  
  
  <!--<span class="label label-default">{{$event->name}}</span>  -->
  <h2>{{$event->name}}</h2><br>
  
  <span class="glyphicon glyphicon-calendar"></span><b>{{$event->eventdate}}日</b><br><br><br>
  <span class="glyphicon glyphicon-time"></span><b>{{$event->time}}</b><br><br><br>
  <span class="glyphicon glyphicon-map-marker"></span><b>{{$event->prefecture}} {{$event->place}}</b><br><br><br>
  <span class="glyphicon glyphicon-list-alt"></span><b>{{$event->description}}</b><br><br><br>
  <span class="glyphicon glyphicon-usd"></span><b>{{$event->price}}</b><br><br><br>
  <span class="glyphicon glyphicon-book"></span><b>{{$event->genre}}</b><br><br><br>
  </div> 
 </div>



@if(Auth::check())
@include('favorites.favorite_button', ['event' => $event])
<li class="w3-black w3-button w3-wide"><a href="{{ route('mypage.mycalendar', Auth::id()) }}">マイカレンダーを見る</a></li>
</div>

<div class='panel panel-info scroll'>
 <h4>一緒に行く人を募集している同期</h4><br>
 @foreach($users as $user)
 <span class="glyphicon glyphicon-user"> {{$user->name}} ({{$user->group}})</span><br><br>
 @endforeach
</div>



</div>

@endif



</body>
@endsection