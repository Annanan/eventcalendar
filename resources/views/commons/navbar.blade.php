<link rel="stylesheet" href="{{ secure_asset('css/navbar1.css') }}">


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
                <a class="navbar-left" href="/zenbu"><img src="{{ secure_asset("images/logo.png") }}" alt="EVENTMOURAKUN"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    
                    <li><a href="{{ route('mypage.mycalendar', Auth::id()) }}">MY CARENDAR</a></li>   
                    
                    <li><a href="{{ route('logout.get') }}">LOGOUT</a></li>
                    @else
                        <li><a href="{{ route('signup.get') }}">新規登録</a></li>
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                    @endif
                </ul>
            </div>
        </div>
    <!--</nav>-->
</header>