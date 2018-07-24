

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
        
        
    <div class='header'> </div>
    <div class="clearfix">
    <div class='largebox'>
      
      
      <div class=setsumei>
        <h1 class=copy>作ろう、自分だけのイベントカレンダー。</h1>

         <h3 class= bun>このアプリの使い方<br> How to use this app</h3>
       <div class=picture id=setsumei1><p class=bunbun id=bunbun1>①:カレンダーからイベントを検索</p>
       </div>
       <div class=picture id=setsumei2><p class=bunbun id=bunbun2>②:興味を持ったイベントを<br>    マイカレンダーに追加</p></div>
       <div class=picture id= setsumei3><p class=bunbun id=bunbun3>③:一緒に行く仲間を<br> 募集することもできる！</p></div>
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
            
            
            @include('commons.error_messages')
             </div>
            </div>
           </div>
      </div>
      </div>

</body>
</html>