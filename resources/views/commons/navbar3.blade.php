<link rel="stylesheet" href="{{ secure_asset('css/navbar3.css') }}">

<header>
  <br>
    <!--<div class=borderline></div>-->
    <!--<nav class="navbar navbar-default navbar-static-top">-->
     
        <div class="haikei">
            
        <span class="w3-wide" style="font-size:23px;">都道府県からイベント検索</span>

                      <div class='ken'> 
                     <a  href="{{ action ('SearchController@tabsearch', 13)  }}">東京都のイベント</a>
                     <a  href="{{ action ('SearchController@tabsearch', 14)  }}">神奈川県のイベント</a>
                     <a  href="{{ action ('SearchController@tabsearch', 12)  }}">千葉県のイベント</a>
                    　　@include('commons.prefecture' ) 
                    </div>
                    
                    
                      
                
                  
            
        </div>   
    
    <!--<div class=borderline2></div>-->
</header>