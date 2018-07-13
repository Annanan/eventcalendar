@extends('layouts.app')
 

@section('content')

<p>検索結果　全ジャンル表示しているよ</p>
        
        <div class="col-xs-12">
            

            @include('commons.calendar',['events' => $search_events])
        </div>

@endsection
