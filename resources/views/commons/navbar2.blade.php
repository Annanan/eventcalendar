<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ secure_asset('css/navbar2.css') }}">


<header>
    <!--<nav class="navbar navbar-default navbar-static-top">-->
        <div class="container">
            <div class="nav navbar-nav navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/zenbu"><img src="/idea16.jpg" alt="EVENTMOURAKUN" width="65" height="65"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                                <li class="w3-pale-red w3-button w3-thin">
                                    <a href="{{ route('events.events') }}">全ジャンル</a>
                                </li>
                                <li class="w3-pink w3-button w3-thin">
                                    <a href="{{ route('events.omatsuri') }}">お祭り・花火</a>
                                </li>
                                <li class="w3-deep-purple w3-button w3-thin">
                                    <a href="{{ route('events.eiga') }}">映画</a>
                                </li>
                                <li class="w3-cyan w3-button w3-thin">
                                    <a href="{{ route('events.sports') }}">スポーツ</a>
                                </li>
                                <li class="w3-lime w3-button w3-thin">
                                    <a href="{{ route('events.ongaku') }}">音楽</a>
                                </li>
                                <li class="w3-orange w3-button w3-thin">
                                    <a href="{{ route('events.gurume') }}">グルメ</a>
                                </li>
                                <li class="w3-deep-orange w3-button w3-thin">
                                    <a href="{{ route('events.geijutsu') }}">芸術</a>
                                </li>
                                <li class="w3-brown w3-button w3-thin">
                                    <a href="{{ route('events.leisure') }}">その他</a>
                                </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li class="w3-light-grey w3-button w3-thin"><a href="{{ route('events.events')}}">TOPへ</a></li>
                        <li class="w3-black w3-button w3-thin"><a href="{{ route('mypage.mycalendar'), Auth::id() }}">MYCALENDAR</a>
                        <li class="w3-grey w3-button w3-thin"><a href="{{ route('logout.get') }}">LOGOUT</a>
                    @else
                        <li class="w3-grey w3-button w3-wide"><a href="{{ route('signup.get') }}">SIGNUP</a></li>
                        <li class="w3-light-grey w3-button w3-wide"><a href="{{ route('login') }}">LOGIN</a></li>
                    @endif
                </ul>
            </div>
        </div>
    <!--</nav>-->
</header>