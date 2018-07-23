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
                <ul class="nav navbar-nav navbar-center"  class=ken>
                   
                    <li>都道府県別でイベントを探す:</li>
                                         <a class=ken href="{{ action ('SearchController@tabsearch', 13)  }}">東京都</a>
                     <a class=ken href="{{ action ('SearchController@tabsearch', 14)  }}">神奈川県</a>
                     <a class=ken href="{{ action ('SearchController@tabsearch', 11)  }}">埼玉県</a>
                     <a class=ken href="{{ action ('SearchController@tabsearch', 12)  }}">千葉県</a>
                     <a class=ken href="{{ action ('SearchController@tabsearch', 27)  }}">大阪府</a>
                     <a class=ken href="{{ action ('SearchController@tabsearch', 23)  }}">愛知県</a>
                     <a class=ken href="{{ action ('SearchController@tabsearch', 40)  }}"> 福岡県</a>
                     <a class=ken href="{{ action ('SearchController@tabsearch', 1)   }}">北海道</a>
                     @include('commons.prefecture' ) 
                </ul>
                  
            </div>
    </div>   
        </div>
    <div class=borderline></div>
</header>