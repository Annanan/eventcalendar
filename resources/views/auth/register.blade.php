

<!DOCTYPE html>
 <html lang = ja>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       <title>EVENT MOURAKUN</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/login.css') }}">
    </head>
    <body>
  <div class="col-xs-10 col-xs-offset-1">
      @include('commons.navbar')
        
         @include('commons.error_messages')
   

    
      
      <h1 class=copy>作ろう、自分だけのイベントカレンダー</h1>
       
    <div class=setsumei  id=ue  class=clearfix>
        

         <h2 class= bun id=bun1> このアプリの使い方</h2>
         
       <div    class=picture id=setsumei1>  <h3>1:イベントを検索</h3>
       </div>
       <div class=picture id=setsumei2><h3>2:マイカレンダーに追加</h3></div>
       <div class=picture id= setsumei3><h3>3:友達を募集</h3></div>
      </div>
         
      
     <div class=setsumei  id=shita  class=clearfix>
        
         <h2 class=bun id=bun2> イベントもうラクんの特徴</h2>
       <div class=picture id=setsumei4><h3>都道府県検索機能</h3>
       </div>
       <div class=picture id=setsumei5><h3>日付検索機能</h3></div>
       <div class=picture id= setsumei6><h3>カレンダーをカスタマイズ</h3></div>
    </div> 
  </diV>   <!--ここまで　largebox-->
      
      
    


    <div class= panelbox>
      <div class="panel" id="register">
            
            <div class="text-center" style="margin-top: 70px;">
               <h1>SIGN UP</h1><br>
            </div>
    
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                
                  <div class="input-group">
                    <span class="input-group-addon">NAME</span>
                    <input type="text" name="name" class="w3-input" placeholder="ex) Taro">
                  </div>
                
                
                <!--<div class="form-group">-->
                <!--    {!! Form::label('name', 'ニックネーム') !!}-->
                <!--    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}-->
                <!--</div>-->
                <br>
                <br>
            
                  <div class="input-group">
                    <span class="input-group-addon">HOME GROUP</span>
                    <input type="text" name="group" class="w3-input" placeholder="ex) 1A">
                  </div>
                <br>
                <br>
                  
                  <div class="input-group">
                    <span class="input-group-addon">PASSWORD</span>
                    <input type="password" name="password" class="w3-input" placeholder="6文字以上">
                  </div>
                <br>
                <br>
                <!--↓元のコード-->
                <!--<div class="form-group">-->
                <!--    {!! Form::label('password', 'パスワード') !!}-->
                <!--    {!! Form::password('password', ['class' => 'form-control']) !!}-->
                <!--</div>-->
                
                
                  <div class="input-group">
                    <span class="input-group-addon">PASSWORD(CONFIRMATION)</span>
                    <input type="password" name='password_confirmation' class="w3-input" placeholder="">
                  </div>
                <br>
                <br>
                
                <!--↓元のコード-->
                <!--<div class="form-group">-->
                <!--    {!! Form::label('password_confirmation', 'パスワード（確認）') !!}-->
                <!--    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}-->
                <!--</div>-->
                
                {!! Form::submit('SIGN UP', ['class' => 'w3-black w3-button w3-wide']) !!}
            {!! Form::close() !!}
            
            
           
             </div>
        </div>
     </div>
   </div>
 
</div>
</body>
</html>