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
        
        <link rel="stylesheet" href="{{ secure_asset('css/cover-style.css') }}">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>        
    
    <body>
        <div class='col-xs-12'>
            <div class='title'>
                EVENT-MOURA-KUN
            </div>

    
            <div class='picture'>
                <div id='wrapper1' class='clearfix'>
                    <div class='left'>
                        <img src='suika.jpg' alt='スイカと水うちわ' >
                    </div>
                
                    <div class='center'>
                        <img src='furin.jpg' alt='風鈴'>
                    </div>
                
                    <div class='right'>
                        <img src='umi.jpg' alt='海'>
                    </div>
                </div>
            
            
                <div id='wrapper2' class='clearfix'>
                    <div class='under-left'>
                        <img src='hanabi.jpg' alt='お祭り'>
                    </div>
                
                    <div class='under-center'>
                        <img src='fashion.jpg' alt='ファッション'>
                    </div>
                
                    <div class='under-right'>
                        <img src='himawari.jpg' alt='ひまわり'>
                    </div>
                </div>
            </div>
        
        <div class='touroku'>
            <ul>
                <li class="w3-white w3-border w3-button w3-wide">{!! link_to_route('signup.get',  'SIGNUP', null, ['class'=>'sign']) !!}</li>
                <li class="w3-white w3-border w3-button w3-wide">{!! link_to_route('login',  'LOGIN', null, ['class'=>'sign']) !!}</li>
            </ul>
        </div>
    </div>
        
    </body>    
