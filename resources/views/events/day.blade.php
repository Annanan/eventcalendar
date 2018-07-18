@extends('layouts.app')

@section('content')

<?php
$omatsuris= DB::table('events')->select('*')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', $date]])->get();
$eigas= DB::table('events')->select('*')->where([['genre', '=','映画'],['eventdate', '=', $date]])->get();
$sports= DB::table('events')->select('*')->where([['genre', '=','スポーツ'],['eventdate', '=', $date]])->get();
$gurumes= DB::table('events')->select('*')->where([['genre', '=','グルメ'],['eventdate', '=', $date]])->get();
$ongakus= DB::table('events')->select('*')->where([['genre', '=','音楽フェス'],['eventdate', '=', $date]])->get();
$geijutsus= DB::table('events')->select('*')->where([['genre', '=','芸術'],['eventdate', '=', $date]])->get();
$leisures= DB::table('events')->select('*')->where([['genre', '=','レジャー'],['eventdate', '=', $date]])->get();
?>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">お祭り・花火大会</h3>
  </div>
  <div class="panel-body">
    <ul class="list-unstyled">
    <?php foreach ($omatsuris as $event) {  
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

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">映画</h3>
  </div>
  <div class="panel-body">
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

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">スポーツ</h3>
  </div>
  <div class="panel-body">
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

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">音楽</h3>
  </div>
  <div class="panel-body">
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


<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">グルメ</h3>
  </div>
  <div class="panel-body">
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

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">芸術</h3>
  </div>
  <div class="panel-body">
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

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">その他</h3>
  </div>
  <div class="panel-body">
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
@endsection