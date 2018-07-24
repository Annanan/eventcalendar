<body>
@extends('layouts.app3')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class=zenbu>
<link rel="stylesheet" href="{{ secure_asset('css/day.css') }}">
<br>
<br>
<h1>  8月{{ $date }}日のイベント一覧  </h1>
<br>

<?php
$omatsuris= DB::table('events')->select('*')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', $date]])->get();
$eigas= DB::table('events')->select('*')->where([['genre', '=','映画'],['eventdate', '=', $date]])->get();
$sports= DB::table('events')->select('*')->where([['genre', '=','スポーツ'],['eventdate', '=', $date]])->get();
$gurumes= DB::table('events')->select('*')->where([['genre', '=','グルメ'],['eventdate', '=', $date]])->get();
$ongakus= DB::table('events')->select('*')->where([['genre', '=','音楽フェス'],['eventdate', '=', $date]])->get();
$geijutsus= DB::table('events')->select('*')->where([['genre', '=','芸術'],['eventdate', '=', $date]])->get();
$leisures= DB::table('events')->select('*')->where([['genre', '=','レジャー'],['eventdate', '=', $date]])->get();
?>

<div class="row">
  <div class="row row-eq-height" id=upper>
    <div class="col-sm-4">
      <div class="panel w3-pink" id=omatsuri>
        <div class="panel-heading">
          <h3 class="panel-title">お祭り・花火大会</h3>
        </div>
        <div class="panel-body w3-white">
    <ul class="list-unstyled">
      <?php foreach ($omatsuris as $event) {  
        echo'('. $event->prefecture .$event->time. ')';
      ?>
        {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
      <?php
        print "<br>";
      }
      ?>
    </ul>
  </div>
  </div>
</div>

<div class="col-sm-4">
<div class="panel w3-deep-purple" id=eiga>
  <div class="panel-heading">
    <h3 class="panel-title">映画</h3>
  </div>
  <div class="panel-body w3-white">
    <ul class="list-unstyled">
    <?php foreach ($eigas as $event) {  
        echo'('. $event->prefecture .')';
              ?>
        {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
      <?php
        print "<br>";
    }
    ?>
    </ul>
  </div>
</div>
</div>

<div class="col-sm-4">
<div class="panel w3-cyan" id=sports>
  <div class="panel-heading">
    <h3 class="panel-title">スポーツ</h3>
  </div>
  <div class="panel-body w3-white">
    <ul class="list-unstyled">
    <?php foreach ($sports as $event) {  
        echo'('. $event->prefecture .')';
              ?>
        {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
      <?php
        print "<br>";
    }
    ?>
    </ul>
  </div>
</div>
</div>
</div>

<div class="row row-eq-height" id=low>
  <div class="col-sm-3">
    <div class="panel w3-lime" id=ongaku>
      <div class="panel-heading">
        <h3 class="panel-title">音楽</h3>
      </div>
    <div class="panel-body w3-white">
      <ul class="list-unstyled">
      <?php foreach ($ongakus as $event) {  
        echo'('. $event->prefecture .')';
              ?>
        {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
      <?php
        print "<br>";
      }
      ?>
      </ul>
    </div>
  </div>
</div>

<div class="col-sm-3">
<div class="panel w3-orange" id=gurume>
  <div class="panel-heading">
    <h3 class="panel-title">グルメ</h3>
  </div>
  <div class="panel-body w3-white">
    <ul class="list-unstyled">
    <?php foreach ($gurumes as $event) {  
        echo'('. $event->prefecture .')';
              ?>
        {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
      <?php
        print "<br>";
    }
    ?>
    </ul>
  </div>
</div>
</div>

<div class="col-sm-3">
<div class="panel w3-deep-orange" id=geijutsu>
  <div class="panel-heading">
    <h3 class="panel-title">芸術</h3>
  </div>
  <div class="panel-body w3-white">
    <ul class="list-unstyled">
    <?php foreach ($geijutsus as $event) {  
        echo'('. $event->prefecture .')';
              ?>
        {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
      <?php
        print "<br>";
    }
    ?>
    </ul>
  </div>
</div>
</div>

<div class="col-sm-3">
<div class="panel w3-brown" id=sonota>
  <div class="panel-heading">
    <h3 class="panel-title">その他</h3>
  </div>
  <div class="panel-body w3-white">
    <ul class="list-unstyled">
    <?php foreach ($leisures as $event) {  
        echo'('. $event->prefecture .')';
              ?>
        {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
      <?php
        print "<br>";
    }
    ?>
    </ul>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection

</body>