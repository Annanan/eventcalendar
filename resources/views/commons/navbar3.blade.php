<link rel="stylesheet" href="{{ secure_asset('css/navbar3.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />



<header>
    <div class=borderline></div>
    <!--<nav class="navbar navbar-default navbar-static-top">-->
     <div class= haikei>
        <div class="container">
            
        
            

                <div class="nav navbar-nav navbar-center">
                   
                    <div class=ken>都道府県別でイベントを探す:
                     <a  href="{{ action ('SearchController@tabsearch', 13)  }}">東京都</a>
                     <a  href="{{ action ('SearchController@tabsearch', 14)  }}">神奈川県</a>
                     <a  href="{{ action ('SearchController@tabsearch', 11)  }}">埼玉県</a>
                     <a  href="{{ action ('SearchController@tabsearch', 12)  }}">千葉県</a>
                     <a  href="{{ action ('SearchController@tabsearch', 27)  }}">大阪府</a>
                     <a  href="{{ action ('SearchController@tabsearch', 23)  }}">愛知県</a>
                     <a  href="{{ action ('SearchController@tabsearch', 40)  }}"> 福岡県</a>
                     <a  href="{{ action ('SearchController@tabsearch', 1)   }}">北海道</a>
                     @include('commons.prefecture' ) 
                    </div>
                </div>  
                  
            
        </div>   
    </div>
    <div class=borderline></div>
</header>