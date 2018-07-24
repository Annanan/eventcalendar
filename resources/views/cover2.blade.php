<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       <title>Eventcalendar</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/cover2.css') }}">
        <script src="cover2.js" type="text/javascript"></script>
        
    </head>

    <body>
        <div class='col-xs-12'>
            <h1 class='theme'>さあ、8月のカレンダーを彩ろう</h1>
            <div class='title'>
                <h1 class='title1'>
                    EVENT-MOURA-KUN
                    <!--<span id=firstE>E</span>-->
                    <!--<span id=V>V</span>-->
                    <!--<span id=secondE>E</span>-->
                    <!--<span id=firstN>N</span>-->
                    <!--<span id=T>T</span>-->
                    <!--<span id=first->-</span>-->
                    <!--<span id=M>M</span>-->
                    <!--<span id=O>O</span>-->
                    <!--<span id=firstU>U</span>-->
                    <!--<span id=R>R</span>-->
                    <!--<span id=A>A</span>-->
                    <!--<span id=second->-</span>-->
                    <!--<span id=K>K</span>-->
                    <!--<span id=secondU>U</span>-->
                    <!--<span id=secondN>N</span>-->
                </h1>
            </div>
            
                <div class='touroku'>
                        <span><a class=signup href="{{ action ('Auth\RegisterController@showRegistrationForm', 1)  }}">SignUp</a></span>
                        <span><a class=signin href="{{ action ('Auth\LoginController@showLoginForm', 1)  }}">LogIn</a></span>
                        
                        <!--<div class='signin'><button type="button" class="btn btn-info btn-lg">{!! link_to_route('login',  '> Login', null, ['class'=>'sign']) !!}</button></div>-->
                        <!--<div class='signup'><button type="button" class="btn btn-warning btn-lg">{!! link_to_route('signup.get',  '> Sign up', null, ['class'=>'sign']) !!}</button></div>-->
                </div>
        </div>