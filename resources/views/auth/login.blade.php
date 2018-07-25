<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       <title>EVENT MOURAKUN</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/login2.css') }}">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>


    
    
    
    <body>
        
　　
      @include('commons.navbar')
    
  

<div class="zentai">
        <!--<h1 class=copy ></h1>-->
        
   <!--<div class='largebox'>-->
        
       <div class="panel"> 
       <br>
          <div class="text-center" style="margin-top: 30px">
            <h1>LOG IN</h1>
          </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            {!! Form::open(['route' => 'login.post']) !!}
                <br>
                <br>
                  <div class="input-group">
                    <span class="input-group-addon">NAME</span>
                    <input type="text" name='name' class="w3-input" placeholder="ex) Taro">
                  </div>
                 <br>
                 <br>
                
                  <div class="input-group">
                    <span class="input-group-addon">PASSWORD</span>
                    <input type="password" name='password' class="w3-input" placeholder="6文字以上">
                  </div>
                <br>
                <br>
                
               

            {!! Form::submit('LOG IN', ['class' => 'w3-black w3-button w3-wide w3-large']) !!}
            {!! Form::close() !!}

            <p></p><p>未登録の場合 → {!! link_to_route('signup.get', '新規登録') !!}</p>
            
            
             @include('commons.error_messages')
        </div>
    </div>
   </div>
  <!--</div>-->
 </div>
 
 
 
 </body>
 
</html>