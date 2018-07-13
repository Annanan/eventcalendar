@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                
                  <div class="input-group">
                    <span class="input-group-addon">ニックネーム</span>
                    <input type="text" name="name" class="form-control" placeholder="ex) Taro">
                  </div>
                
                <!--↓元のコード-->
                <!--<div class="form-group">-->
                <!--    {!! Form::label('name', 'ニックネーム') !!}-->
                <!--    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}-->
                <!--</div>-->
                <br>
                
            
                  <div class="input-group">
                    <span class="input-group-addon">パスワード</span>
                    <input type="password" name="password" class="form-control" placeholder="6文字以上">
                  </div>
                <br>
                
                <!--↓元のコード-->
                <!--<div class="form-group">-->
                <!--    {!! Form::label('password', 'パスワード') !!}-->
                <!--    {!! Form::password('password', ['class' => 'form-control']) !!}-->
                <!--</div>-->
                
                
                  <div class="input-group">
                    <span class="input-group-addon">パスワード (確認) </span>
                    <input type="password" name='password_confirmation' class="form-control" placeholder="">
                  </div>
                <br>
                
                <!--↓元のコード-->
                <!--<div class="form-group">-->
                <!--    {!! Form::label('password_confirmation', 'パスワード（確認）') !!}-->
                <!--    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}-->
                <!--</div>-->
                
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection