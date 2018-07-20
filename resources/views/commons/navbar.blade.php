<link rel="stylesheet" href="{{ secure_asset('css/navbar1.css') }}">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<header>
    <!--<nav class="navbar navbar-default navbar-static-top">-->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/zenbu"><img src=".jpg" alt="EVENTMOURAKUN"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    
                    <li class="w3-black w3-button w3-wide"><a href="{{ route('mypage.mycalendar', Auth::id()) }}">MY CALENDAR</a></li>   
                    
                    <li class="w3-grey w3-button w3-wide"><a href="{{ route('logout.get') }}">LOGOUT</a></li>
                    @else
                        <li><a href="{{ route('signup.get') }}">SIGNUP</a></li>
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                    @endif
                </ul>
            </div>
        </div>
    <!--</nav>-->
</header>