<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       <title>Eventcalendar</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/login.css') }}">
    </head>
    <body>
      @include('commons.navbar')
       
        
        <h1 class=copy >作ろう、自分だけのイベントカレンダー。</h1>
        
   <div class='largebox'>
        
       <div class="panel" id="login"> 
       <br>
          <div class="text-center">
            <h1>Log in</h1>
          </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            {!! Form::open(['route' => 'login.post']) !!}
                <br>
                <br>
                  <div class="input-group">
                    <span class="input-group-addon">ニックネーム</span>
                    <input type="text" name='name' class="form-control" placeholder="ex) Taro">
                  </div>
                 <br>
            
                
                  <div class="input-group">
                    <span class="input-group-addon">パスワード</span>
                    <input type="password" name='password' class="form-control" placeholder="6文字以上">
                  </div>
                <br>
                
               

            {!! Form::submit('Log in', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}

            <p></p><p>未登録の場合 → {!! link_to_route('signup.get', '新規登録') !!}</p>
            
            
             @include('commons.error_messages')
        </div>
    </div>
   </div>