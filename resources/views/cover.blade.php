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
        
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>        
    
    <body>
        <div class='title'>
            <h1>EVENTMOURAKUN</h1>
        </div>

    
        <div class=''>
            <div id='wrapper1' class='clearfix'>
                <figure class='left'>
                    <img src='suika.jpg' alt='スイカと水うちわ' style='width:300px;height:300px;float:left'>
                </figure>
                
                <figure class='center'>
                    <img src='furin.jpg' alt='風鈴'style='width:300px;height:300px;float:left'>
                </figure>
                
                <figure class='right'>
                    <img src='umi.jpg' alt='海'style='width:300px;height:300px;float:right'>
                </figure>
            </div>
            
            
            <div id='wrapper2' class='clearfix'>
                <figure class='left'>
                    <img src='hanabi.jpg' alt='お祭り'style='width:300px;height:300px;float:left'>
                </figure>
                
                <figure class='center'>
                    <img src='fashion.jpg' alt='ファッション'style='width:300px;height:300px;float:left'>
                </figure>
                
                <figure class='right'>
                    <img src='himawari.jpg' alt='ひまわり'style='width:300px;height:300px;float:right'>
                </figure>
            </div>
            
        </div>
        
        <div class='登録のところ'>
            {!! link_to_route('signup.get',  'Sign up', null) !!}
            {!! link_to_route('login',  'Login', null) !!}
        </div>

        
    </body>    
