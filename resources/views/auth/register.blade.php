@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <!--<form>-->
                <!--  <div class="input-group">-->
                <!--    <span class="input-group-addon">ニックネーム</span>-->
                <!--    <input type="text" class="form-control" placeholder="ex) Taro">-->
                <!--  </div>-->
                <!--</form>-->
                <div class="form-group">
                    {!! Form::label('name', 'ニックネーム') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                <!--<br>-->
                <!--<form>-->
                <!--  <div class="input-group">-->
                <!--    <span class="input-group-addon">パスワード</span>-->
                <!--    <input type="password" class="form-control" placeholder="6文字以上">-->
                <!--  </div>-->
                <!--</form>-->
                <!--<br>-->
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <!--<form>-->
                <!--  <div class="input-group">-->
                <!--    <span class="input-group-addon">パスワード (確認) </span>-->
                <!--    <input type="password" class="form-control" placeholder="">-->
                <!--  </div>-->
                <!--</form>-->
                <!--<br>-->
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Sign up', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection