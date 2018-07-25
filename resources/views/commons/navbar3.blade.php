<link rel="stylesheet" href="{{ secure_asset('css/navbar3.css') }}">

<header>
  <br>
    <!--<div class=borderline></div>-->
    <!--<nav class="navbar navbar-default navbar-static-top">-->
     
        <div class="haikei">
            
        
            

                <div class="nav navbar-nav navbar-center">
                   
                    
                        
                         
                     
                    
                      <div class='ken'> 
                     <a  href="{{ action ('SearchController@tabsearch', 13)  }}">東京都のイベント</a>
                     <a  href="{{ action ('SearchController@tabsearch', 14)  }}">神奈川県のイベント</a>
                     <a  href="{{ action ('SearchController@tabsearch', 12)  }}">千葉県のイベント</a>
                    　　@include('commons.prefecture' ) 
                    </div>
                    
                    
                      
                </div>  
                  
            
        </div>   
    
    <!--<div class=borderline2></div>-->
</header>