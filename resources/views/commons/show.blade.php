<head>
<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">
</head>
@extends('layouts.app2')

@section('content')
<body>


<div class=eventkuwashiku>
<<<<<<< HEAD
<div class="col-xs-12">

    
  <h2>{{$event->name}}</h2><br>
  
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
=======
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
>>>>>>> ebf25eeb3e84cd7f41e68da7f07768953d8cfa98
</div>

<div class='panel panel-info scroll'>
 <h4>一緒に行く人を募集している同期</h4><br>
 @foreach($users as $user)
 <span class="glyphicon glyphicon-user"> {{$user->name}} ({{$user->group}})</span><br><br>
 @endforeach
</div>



<<<<<<< HEAD
<h3>募集しているユーザー一覧</h3><br>
@foreach($users as $user)
<span class="glyphicon glyphicon-user">{{$user->name}} ({{$user->group}})</span><br><br>
@endforeach
=======
>>>>>>> ebf25eeb3e84cd7f41e68da7f07768953d8cfa98
</div>

@endif



</body>
@endsection