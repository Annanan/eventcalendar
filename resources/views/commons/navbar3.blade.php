<link rel="stylesheet" href="{{ secure_asset('css/navbar3.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />



<header>
    <div class=borderline></div>
    <!--<nav class="navbar navbar-default navbar-static-top">-->
     <div class= haikei>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                 
             
            
                
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center">
                   
                    <li>都道府県別でイベントを探す:</li>
                    <li >{!! link_to_route('events.tabsearch','東京',['num' => 13]) !!}</li>   
                    <li>{!! link_to_route('events.tabsearch','神奈川',['num' => 14]) !!}</li>
                    <li >{!! link_to_route('events.tabsearch','埼玉',['num' => 11]) !!}</li>   
                    <li>{!! link_to_route('events.tabsearch','千葉',['num' => 12]) !!}<li>
                    <li>{!! link_to_route('events.tabsearch','大阪',['num' => 27]) !!}<li>
                    <li>{!! link_to_route('events.tabsearch','愛知',['num' => 23]) !!}<li>
                    <li>{!! link_to_route('events.tabsearch','福岡',['num' => 40]) !!}<li>
                    <li>{!! link_to_route('events.tabsearch','北海道',['num' => 1]) !!}<li>
               
                   @include('commons.prefecture') 
                </ul>
                  
            </div>
    </div>   
        </div>
    <div class=borderline></div>
</header>