<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="nav navbar-nav navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/zenbu"><img src="" alt="イベントもうラクん"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                                <li>
                                    <a href="{{ route('events.events') }}">全ジャンル</a>
                                </li>
                                <li>
                                    <a href="{{ route('events.omatsuri') }}">お祭り・花火大会</a>
                                </li>
                                <li>
                                    <a href="{{ route('events.eiga') }}">映画</a>
                                </li>
                                <li>
                                    <a href="{{ route('events.sports') }}">スポーツ</a>
                                </li>
                                <li>
                                    <a href="{{ route('events.ongaku') }}">音楽</a>
                                </li>
                                <li>
                                    <a href="{{ route('events.gurume') }}">グルメ</a>
                                </li>
                                <li>
                                    <a href="{{ route('events.geijutsu') }}">芸術</a>
                                </li>
                                <li>
                                    <a href="{{ route('events.leisure') }}">その他</a>
                                </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="{{ route('events.events')}}">TOPへ</a></li>
                        <li classs="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}さん <span class="caret"></span></a>
                            <ul class="dropdown-menu">   
                                <li><a href="{{ route('mypage.mycalendar', Auth::id()) }}">マイカレンダー</a></li>
                                <li><a href="{{ route('logout.get') }}">ログアウト</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('signup.get') }}">新規登録</a></li>
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>