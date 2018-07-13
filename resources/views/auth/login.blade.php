@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
            <!--<form>-->
            <!--      <div class="input-group">-->
            <!--        <span class="input-group-addon">ニックネーム</span>-->
            <!--        <input type="text" class="form-control" placeholder="ex) Taro">-->
            <!--      </div>-->
            <!--</form>-->
            
            
                <div class="form-group">
                    {!! Form::label('name', 'ニックネーム') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                
                
        <!--<br>-->
        <!--    <form>-->
        <!--          <div class="input-group">-->
        <!--            <span class="input-group-addon">パスワード</span>-->
        <!--            <input type="password" class="form-control" placeholder="6文字以上">-->
        <!--          </div>-->
        <!--    </form>-->
        <!--        <br>-->
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

            {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection