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
        
        <link rel="stylesheet" href="{{ secure_asset('css/all.css') }}">
        
        
        
    </head>

    <body>
        @include('commons.navbar2')
        @include('commons.error_messages')
        
        <div class="container">

        @yield('content')
    </div>
    </body>
    
    <footer>
       © 2018 Koders.
    </footer>
    
</html>