<!DOCTYPE html>
 <html lang = ja>
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
        
        
   <div class='largebox'>
        <h1 class=copy >君がくれた夏</h1>
        
       <div class="panel" id="login"> 
       @include('commons.error_messages')
          <div class="text-center">
            <h1>Log in</h1>
          </div>

         <div class="row">
             <div class="col-md-10 col-md-offset-1">

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
   </div>