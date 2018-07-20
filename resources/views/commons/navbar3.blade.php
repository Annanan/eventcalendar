<link rel="stylesheet" href="{{ secure_asset('css/navbar1.css') }}">
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
                
                 
             
            
                
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center">
                   
                    <li>都道府県別でイベントを探す:</li>
                    <li >{!! link_to_route('events.tabsearch','東京',['num' => 13]) !!}</li>   
                    <li>{!! link_to_route('events.tabsearch','神奈川',['num' => 14]) !!}</li>
                    <li >{!! link_to_route('events.tabsearch','埼玉',['num' => 11]) !!}</li>   
                    <li>{!! link_to_route('events.tabsearch','千葉',['num' => 12]) !!}<li>
               
                   @include('commons.prefecture') 
                </ul>
                  
            </div>
           
        </div>
    <!--</nav>-->
</header>