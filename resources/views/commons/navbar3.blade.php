<link rel="stylesheet" href="{{ secure_asset('css/navbar3.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />

<header>
    <div class=borderline></div>
    <!--<nav class="navbar navbar-default navbar-static-top">-->
     
        <div class="haikei">
            
        
            

                <div class="nav navbar-nav navbar-center">
                   
                    
                        
                         
                     
                     
                      @include('commons.prefecture' ) 
                      <div class=ken> 
                     <a  href="{{ action ('SearchController@tabsearch', 13)  }}">東京都のイベント</a>
                     <a  href="{{ action ('SearchController@tabsearch', 14)  }}">神奈川県のイベント</a>
                     <a  href="{{ action ('SearchController@tabsearch', 12)  }}">千葉県のイベント</a>
                    
                    </div>
                </div>  
                  
            
        </div>   
    
    <div class=borderline></div>
</header>