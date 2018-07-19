

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
        @include('commons.error_messages')
        


    
        <h1 class=copy >８がつ！！( キャッチコピー書くところ) <br> あなたののどに狙いを決めて<br>　ベンザブロック</h1>
      <div class=setsumei>
         <h3 class= bun>このアプリの使い方</h3>
       <div class=picture><p>ｌｌｌ</p>
       </div>
       <div class=picture><p>お疲れ様です。</p></div>
       <div class=picture><p>お疲れ様です。</p></div>
      </div>
      
      
    



    <div class="panel" id="register">
    <div class="text-center">
        <h1>Sign up</h1><br>
    </div>
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
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
                    <span class="input-group-addon">ホームグループ</span>
                    <input type="text" name="group" class="form-control" placeholder="ex) 1A">
                  </div>
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
 </div>


</body>
</html>