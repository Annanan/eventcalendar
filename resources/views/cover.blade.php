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
        
    </head>        
    
    <body>
        <div class='title'>
            <h1>EVENTMOURAKUN</h1>
        </div>
    
        <div class='写真たち'>
            <figure>
                <img src='イメージURL' alt='スイカと水うちわ'>
            </figure>
            
            <figure>
                <img src='イメージURL' alt='貝殻'>
            </figure>
            
            <figure>
                <img src='イメージURL' alt='海'>
            </figure>
            
            <figure>
                <img src='イメージURL' alt='お祭り'>
            </figure>
            
            <figure>
                <img src='イメージURL' alt='ファッション'>
            </figure>
            
            <figure>
                <img src='イメージURL' alt='ひまわり'>
            </figure>
            
        </div>
        
        <div class='登録のところ'>
            {!! link_to_route('signup.get',  'Sign up', null) !!}
            {!! link_to_route('login',  'Login', null) !!}
        </div>
        
    </body>    
