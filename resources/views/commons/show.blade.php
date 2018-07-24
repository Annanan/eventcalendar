<head>
<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">
</head>
@extends('layouts.app2')

@section('content')

<br>
<body>

<div class="col-xs-12">

<div class=eventkuwashiku>
 <div class=description>
  
  
  <!--<span class="label label-default">{{$event->name}}</span>  -->
  <h2>{{$event->name}}</h2><br>
  
  <span class="glyphicon glyphicon-calendar">：{{$event->eventdate}}日</span><br><br><br>
  <span class="glyphicon glyphicon-time">：{{$event->time}}</span><br><br><br>
  <span class="glyphicon glyphicon-map-marker">：{{$event->prefecture}} {{$event->place}}</span><br><br><br>
  <span class="glyphicon glyphicon-list-alt">：{{$event->description}}</span><br><br><br>
  <span class="glyphicon glyphicon-usd">：{{$event->price}}</span><br><br><br>
  <span class="glyphicon glyphicon-book">：{{$event->genre}}</span><br><br><br>
  </div> 
 </div>



@if(Auth::check())

<div class=boshuchu>
 <h4>一緒に行く人を募集している同期</h4><br>
 @foreach($users as $user)
 <span class="glyphicon glyphicon-user"> {{$user->name}} ({{$user->group}})</span><br><br>
 @endforeach
</div>

<br>

<div class="button">
@include('favorites.favorite_button', ['event' => $event])
</div>



@endif

</div>

</body>
@endsection