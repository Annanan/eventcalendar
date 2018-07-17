@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <br>
                  <div class="input-group">
                    <span class="input-group-addon">ニックネーム</span>
                    <input type="text" name='name' class="form-control" placeholder="ex) Taro">
                  </div>
                 <br>
                
            
                <!--↓元のコード-->
                <!--<div class="form-group">-->
                <!--    {!! Form::label('name', 'ニックネーム') !!}-->
                <!--    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}-->
                <!--</div>-->
                
                  <div class="input-group">
                    <span class="input-group-addon">パスワード</span>
                    <input type="password" name='password' class="form-control" placeholder="6文字以上">
                  </div>
                <br>
                
                <!--↓元のコード-->
                <!--<div class="form-group">-->
                <!--    {!! Form::label('password', 'パスワード') !!}-->
                <!--    {!! Form::password('password', ['class' => 'form-control']) !!}-->
                <!--</div>-->

            {!! Form::submit('Log in', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}

            <p>未登録の場合 → {!! link_to_route('signup.get', '新規登録') !!}</p>
        </div>
    </div>
@endsection