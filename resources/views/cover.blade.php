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
        <div class="center jumbotron">
            <div class="text-center">
                <h3>行きたいイベントこの夏こそは！</h3>
                <h1>８月イベントもうラクん</h1>
                  
                {!! link_to_route('signup.get', '新規登録して始める', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login', 'ログイン', null, ['class' => 'btn btn-lg btn-info']) !!}
                {!! link_to_route('events.events', '登録せずに始める', null) !!}
            </div>
        </div>
        
    </body>    
