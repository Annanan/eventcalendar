@extends('layouts.app')
 

@section('content')

   
        
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                //１行が各ジャンルのタブをあらわす。要ルート変更
                
                <li role="presentation" class="{{ Request::is('events/') ? 'active' : '' }}"><a href="{{ route('welcome', ['id' => $user->id]) }}">全イベント </a></li>
                <li role="presentation" class="{{ Request::is('events/*/omatsuri') ? 'active' : '' }}"><a href="{{ route('events.omatsuri', ['id' => $user->id]) }}">　お祭り・花火大会 </a></li>
                <li role="presentation" class="{{ Request::is('events/*/eiga') ? 'active' : '' }}"><a href="{{ route('events.eiga', ['id' => $user->id]) }}">映画 </a></li>
                <li role="presentation" class="{{ Request::is('events/*/leisure') ? 'active' : '' }}"><a href="{{ route('events.leisure', ['id' => $user->id]) }}">レジャー</a></li>  
                <li role="presentation" class="{{ Request::is('events/*/sports') ? 'active' : '' }}"><a href="{{ route('events.sports', ['id' => $user->id]) }}">スポーツ</a></li>
                <li role="presentation" class="{{ Request::is('events/*/ongaku') ? 'active' : '' }}"><a href="{{ route('events.ongaku', ['id' => $user->id]) }}">音楽</a></li>
                <li role="presentation" class="{{ Request::is('events/*/gurume') ? 'active' : '' }}"><a href="{{ route('events.gurume', ['id' => $user->id]) }}">グルメ</a></li>
                <li role="presentation" class="{{ Request::is('events/*/geijutsu') ? 'active' : '' }}"><a href="{{ route('events.geijutsu', ['id' => $user->id]) }}">芸術</a></li>           
            </ul>

@foreach ($microposts as $micropost)
          //  @include(カレンダーのやつ)
          // ここでは全部のイベントを表示する。
@endforeach
           
        </div>
    </div>

@endsection
