


<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<table border="3" class="kotei">
    
   <thead>
     
         <tr class="year">
             <h1>2018年 8月</h1> <p>日付をクリックで　その日のイベント一覧ページへ</p>
        </tr>
          
    </thead>
  
    
        <tr class="youbi, w3-background w3-pale-red">
            <th>MON</th>
            <th>TUE</th>
            <th>WED</th>
            <th>THU</th>
            <th>FRI</th>
            <th><font color="blue">SAT</font></th>
            <th><font color="red">SUN</font></th>
        </tr>
        
    <tbody>
        <tr class="week1">
            <td class="monday">
             <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;例-->
            </td>
            <td class="tuesday">
                <br>
                <br>
        🐮イベント名 (イベント数)
        
            </td>
            
            <td class="wednesday"><span style="font-weight:bold">
                 <a class=daylink href="{{ action ('DayController@day', 1)  }}">1</a>
             </span> 
              <br>
              
              <?php
             
            $omatsuri_1= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '1']])->count();
            $eiga_1= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '1']])->count();
            $sports_1= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '1']])->count();
            $gurume_1= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '1']])->count();
            $ongaku_1= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '1']])->count();
            $geijutsu_1= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '1']])->count();
            $leisure_1= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '1']])->count();

              ?>
             @if($omatsuri_1 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_1 }})</span>
             @endif
             @if($eiga_1 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_1 }}) </span>
             @endif
             @if($sports_1 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_1 }}) </span>
             @endif
             @if($ongaku_1 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_1 }})</span>
             @endif
             @if($gurume_1 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_1 }})</span>
             @endif
             @if($geijutsu_1 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_1 }}) </span>
             @endif
             @if($leisure_1 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_1 }})</span>
             @endif
              
            </td>
            
             <td class="thursday"><span style="font-weight:bold">
                   <a class=daylink href="{{ action ('DayController@day', 2)  }}">2</a>
             </span> 
              <br>
              
              <?php
            $omatsuri_2= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '2']])->count();
            $eiga_2= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '2']])->count();
            $sports_2= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '2']])->count();
            $gurume_2= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '2']])->count();
            $ongaku_2= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '2']])->count();
            $geijutsu_2= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '2']])->count();
            $leisure_2= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '2']])->count();

              ?>
              
              @if($omatsuri_2 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_2 }})</span>
             @endif
             @if($eiga_2 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_2 }}) </span>
             @endif
             @if($sports_2 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_2 }}) </span>
             @endif
             @if($ongaku_2 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_2 }})</span>
             @endif
             @if($gurume_2 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_2 }})</span>
             @endif
             @if($geijutsu_2 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_2 }}) </span>
             @endif
             @if($leisure_2 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_2 }})</span>
             @endif
            
              
            </td>
            
            
             <td class="friday"><span style="font-weight:bold">
                  
                  <a class=daylink href="{{ action ('DayController@day', 3)  }}">3</a>
             </span> 
              <br>
              
              <?php
            $omatsuri_3= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '3']])->count();
            $eiga_3= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '3']])->count();
            $sports_3= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '3']])->count();
            $gurume_3= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '3']])->count();
            $ongaku_3= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '3']])->count();
            $geijutsu_3= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '3']])->count();
            $leisure_3= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '3']])->count();

              ?>
              
              @if($omatsuri_3 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_3 }})</span>
             @endif
             @if($eiga_3 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_3 }}) </span>
             @endif
             @if($sports_3 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_3 }}) </span>
             @endif
             @if($ongaku_3 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_3 }})</span>
             @endif
             @if($gurume_3 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_3 }})</span>
             @endif
             @if($geijutsu_3 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_3 }}) </span>
             @endif
             @if($leisure_3 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_3 }})</span>
             @endif
            
              
              
            </td>
            
            
            
            
            
            
            
             <td class="saturday"><span style="font-weight:bold">
                   <a class=daylink href="{{ action ('DayController@day', 4)  }}">4</a>
             </span> 
              <br>
              
              <?php
            $omatsuri_4= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '4']])->count();
            $eiga_4= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '4']])->count();
            $sports_4= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '4']])->count();
            $gurume_4= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '4']])->count();
            $ongaku_4= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '4']])->count();
            $geijutsu_4= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '4']])->count();
            $leisure_4= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '4']])->count();

              ?>
              
              @if($omatsuri_4 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_4 }})</span>
             @endif
             @if($eiga_4 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_4 }}) </span>
             @endif
             @if($sports_4 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_4 }}) </span>
             @endif
             @if($ongaku_4 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_4 }})</span>
             @endif
             @if($gurume_4 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_4 }})</span>
             @endif
             @if($geijutsu_4 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_4 }}) </span>
             @endif
             @if($leisure_4 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_4 }})</span>
             @endif
             
              
            </td>
            
             <td class="sunday"><span style="font-weight:bold">
                   <a class=daylink href="{{ action ('DayController@day', 5)  }}">5</a>
             </span> 
              <br>
              
              <?php
            $omatsuri_5= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '5']])->count();
            $eiga_5= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '5']])->count();
            $sports_5= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '5']])->count();
            $gurume_5= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '5']])->count();
            $ongaku_5= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '5']])->count();
            $geijutsu_5= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '5']])->count();
            $leisure_5= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '5']])->count();

              ?>
            @if($omatsuri_5 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_5 }})</span>
             @endif
             @if($eiga_5 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_5 }}) </span>
             @endif
             @if($sports_5 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_5 }}) </span>
             @endif
             @if($ongaku_5 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_5 }})</span>
             @endif
             @if($gurume_5 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_5 }})</span>
             @endif
             @if($geijutsu_5 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_5 }}) </span>
             @endif
             @if($leisure_5 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_5 }})</span>
             @endif
              
            </td>
           </tr>
        <tr class="week2">  
            <td class="monday"><span style="font-weight:bold">
                  <a class=daylink href="{{ action ('DayController@day', 6)  }}">6</a>
            </span> 
          <br>
              
     <?php
        $omatsuri_6= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '6']])->count();
        $eiga_6= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '6']])->count();
        $sports_6= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '6']])->count();
        $gurume_6= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '6']])->count();
        $ongaku_6= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '6']])->count();
        $geijutsu_6= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '6']])->count();
        $leisure_6= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '6']])->count();
      ?>
      
       @if($omatsuri_6 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_6 }})</span>
             @endif
             @if($eiga_6 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_6 }}) </span>
             @endif
             @if($sports_6 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_6 }}) </span>
             @endif
             @if($ongaku_6 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_6 }})</span>
             @endif
             @if($gurume_6 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_6 }})</span>
             @endif
             @if($geijutsu_6 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_6 }}) </span>
             @endif
             @if($leisure_6 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_6 }})</span>
             @endif

       
       
       
              
</td>

<td class="tuesday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 7)  }}">7</a>
</span> 
    <br>
              
    <?php
        $omatsuri_7= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '7']])->count();
        $eiga_7= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '7']])->count();
        $sports_7= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '7']])->count();
        $gurume_7= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '7']])->count();
        $ongaku_7= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '7']])->count();
        $geijutsu_7= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '7']])->count();
        $leisure_7= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '7']])->count();
    ?>
        @if($omatsuri_7 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_7 }})</span>
             @endif
             @if($eiga_7 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_7 }}) </span>
             @endif
             @if($sports_7 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_7 }}) </span>
             @endif
             @if($ongaku_7 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_7 }})</span>
             @endif
             @if($gurume_7 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_7 }})</span>
             @endif
             @if($geijutsu_7 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_7 }}) </span>
             @endif
             @if($leisure_7 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_7 }})</span>
             @endif
                         
       
       
              
</td>

<td class="wednesday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 8)  }}">8</a>
</span> 
    <br>
              
    <?php
        $omatsuri_8= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '8']])->count();
        $eiga_8= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '8']])->count();
        $sports_8= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '8']])->count();
        $gurume_8= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '8']])->count();
        $ongaku_8= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '8']])->count();
        $geijutsu_8= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '8']])->count();
        $leisure_8= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '8']])->count();
    ?>
     @if($omatsuri_8 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_8 }})</span>
             @endif
             @if($eiga_8 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_8 }}) </span>
             @endif
             @if($sports_8 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_8 }}) </span>
             @endif
             @if($ongaku_8 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_8 }})</span>
             @endif
             @if($gurume_8 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_8 }})</span>
             @endif
             @if($geijutsu_8 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_8 }}) </span>
             @endif
             @if($leisure_8 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_8 }})</span>
             @endif
       
       
       
              
</td>

<td class="thursday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 9)  }}">9</a>
</span> 
    <br>
              
    <?php
        $omatsuri_9= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '9']])->count();
        $eiga_9= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '9']])->count();
        $sports_9= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '9']])->count();
        $gurume_9= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '9']])->count();
        $ongaku_9= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '9']])->count();
        $geijutsu_9= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '9']])->count();
        $leisure_9= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '9']])->count();
    ?>
       
            @if($omatsuri_9 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_9 }})</span>
             @endif
             @if($eiga_9 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_9 }}) </span>
             @endif
             @if($sports_9 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_9 }}) </span>
             @endif
             @if($ongaku_9 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_9 }})</span>
             @endif
             @if($gurume_9 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_9 }})</span>
             @endif
             @if($geijutsu_9 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_9 }}) </span>
             @endif
             @if($leisure_9 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_9 }})</span>
             @endif
                          
       
       
              
</td>

<td class="friday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 10)  }}">10</a>
</span> 
    <br>
              
    <?php
        $omatsuri_10= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '10']])->count();
        $eiga_10= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '10']])->count();
        $sports_10= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '10']])->count();
        $gurume_10= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '10']])->count();
        $ongaku_10= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '10']])->count();
        $geijutsu_10= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '10']])->count();
        $leisure_10= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '10']])->count();
    ?>
         @if($omatsuri_10 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_10 }})</span>
             @endif
             @if($eiga_10 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_10 }}) </span>
             @endif
             @if($sports_10 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_10 }}) </span>
             @endif
             @if($ongaku_10 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_10 }})</span>
             @endif
             @if($gurume_10 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_10 }})</span>
             @endif
             @if($geijutsu_10 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_10 }}) </span>
             @endif
             @if($leisure_10 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_10 }})</span>
             @endif

              
</td>

<td class="sunday"><span style="font-weight:bold">
  <a class=daylink href="{{ action ('DayController@day', 11)  }}">11</a>
</span> 
              <br>
              
              <?php
            $omatsuri_11= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '11']])->count();
            $eiga_11= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '11']])->count();
            $sports_11= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '11']])->count();
            $gurume_11= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '11']])->count();
            $ongaku_11= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '11']])->count();
            $geijutsu_11= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '11']])->count();
            $leisure_11= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '11']])->count();

              ?>
              @if($omatsuri_11 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_11 }})</span>
             @endif
             @if($eiga_11 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_11 }}) </span>
             @endif
             @if($sports_11 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_11 }}) </span>
             @endif
             @if($ongaku_11 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_11 }})</span>
             @endif
             @if($gurume_11 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_11 }})</span>
             @endif
             @if($geijutsu_11 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_11 }}) </span>
             @endif
             @if($leisure_11 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_11 }})</span>
             @endif

           
           
           
              
            </td>
<td class="sunday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 12)  }}">12</a>
</span> 
              <br>
              
              <?php
            $omatsuri_12= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '12']])->count();
            $eiga_12= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '12']])->count();
            $sports_12= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '12']])->count();
            $gurume_12= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '12']])->count();
            $ongaku_12= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '12']])->count();
            $geijutsu_12= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '12']])->count();
            $leisure_12= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '12']])->count();

              ?>
              
              @if($omatsuri_12 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_12 }})</span>
             @endif
             @if($eiga_12 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_12 }}) </span>
             @endif
             @if($sports_12 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_12 }}) </span>
             @endif
             @if($ongaku_12 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_12 }})</span>
             @endif
             @if($gurume_12 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_12 }})</span>
             @endif
             @if($geijutsu_12 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_12 }}) </span>
             @endif
             @if($leisure_12 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_12 }})</span>
             @endif

            
            
            
              
            </td>
 </tr>
        
        <tr class="week3">

<td class="monday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 13)  }}">13</a>
</span> 
              <br>
              
              <?php
            $omatsuri_13= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '13']])->count();
            $eiga_13= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '13']])->count();
            $sports_13= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '13']])->count();
            $gurume_13= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '13']])->count();
            $ongaku_13= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '13']])->count();
            $geijutsu_13= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '13']])->count();
            $leisure_13= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '13']])->count();

              ?>
            @if($omatsuri_13 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_13 }})</span>
             @endif
             @if($eiga_13 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_13 }}) </span>
             @endif
             @if($sports_13 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_13 }}) </span>
             @endif
             @if($ongaku_13 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_13 }})</span>
             @endif
             @if($gurume_13 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_13 }})</span>
             @endif
             @if($geijutsu_13 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_13 }}) </span>
             @endif
             @if($leisure_13 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_13 }})</span>
             @endif
            
            
              
              
            </td>
<td class="tuesday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 14)  }}">14</a>
</span> 
              <br>
              
              <?php
            $omatsuri_14= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '14']])->count();
            $eiga_14= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '14']])->count();
            $sports_14= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '14']])->count();
            $gurume_14= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '14']])->count();
            $ongaku_14= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '14']])->count();
            $geijutsu_14= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '14']])->count();
            $leisure_14= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '14']])->count();

              ?>
            
            @if($omatsuri_14 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_14 }})</span>
             @endif
             @if($eiga_14 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_14 }}) </span>
             @endif
             @if($sports_14 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_14 }}) </span>
             @endif
             @if($ongaku_14 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_14 }})</span>
             @endif
             @if($gurume_14 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_14 }})</span>
             @endif
             @if($geijutsu_14 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_14 }}) </span>
             @endif
             @if($leisure_14 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_14 }})</span>
             @endif


            
            
              
            </td>
<td class="wednesday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 15)  }}">15</a>
</span> 
              <br>
              
              <?php
            $omatsuri_15= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '15']])->count();
            $eiga_15= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '15']])->count();
            $sports_15= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '15']])->count();
            $gurume_15= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '15']])->count();
            $ongaku_15= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '15']])->count();
            $geijutsu_15= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '15']])->count();
            $leisure_15= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '15']])->count();

              ?>
            
            @if($omatsuri_15 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_15 }})</span>
             @endif
             @if($eiga_15 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_15 }}) </span>
             @endif
             @if($sports_15 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_15 }}) </span>
             @endif
             @if($ongaku_15 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_15 }})</span>
             @endif
             @if($gurume_15 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_15 }})</span>
             @endif
             @if($geijutsu_15 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_15 }}) </span>
             @endif
             @if($leisure_15 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_15 }})</span>
             @endif

            
            
            </td>
            


<td class="thursday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 16)  }}">16</a>
</span> 
              <br>
              
              <?php
            $omatsuri_16= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '16']])->count();
            $eiga_16= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '16']])->count();
            $sports_16= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '16']])->count();
            $gurume_16= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '16']])->count();
            $ongaku_16= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '16']])->count();
            $geijutsu_16= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '16']])->count();
            $leisure_16= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '16']])->count();

              ?>
            @if($omatsuri_16 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_16 }})</span>
             @endif
             @if($eiga_16 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_16 }}) </span>
             @endif
             @if($sports_16 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_16 }}) </span>
             @endif
             @if($ongaku_16 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_16 }})</span>
             @endif
             @if($gurume_16 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_16 }})</span>
             @endif
             @if($geijutsu_16 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_16 }}) </span>
             @endif
             @if($leisure_16 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_16 }})</span>
             @endif
             
            
            
              
            </td>
            
<td class="friday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 17)  }}">17</a>
</span> 
              <br>
              
              <?php
            $omatsuri_17= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '17']])->count();
            $eiga_17= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '17']])->count();
            $sports_17= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '17']])->count();
            $gurume_17= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '17']])->count();
            $ongaku_17= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '17']])->count();
            $geijutsu_17= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '17']])->count();
            $leisure_17= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '17']])->count();

              ?>
              
              @if($omatsuri_17 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_17 }})</span>
             @endif
             @if($eiga_17 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_17 }}) </span>
             @endif
             @if($sports_17 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_17 }}) </span>
             @endif
             @if($ongaku_17 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_17 }})</span>
             @endif
             @if($gurume_17 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_17 }})</span>
             @endif
             @if($geijutsu_17 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_17 }}) </span>
             @endif
             @if($leisure_17 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_17 }})</span>
             @endif

            
            
            
              
            </td>
            
<td class="saturday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 18)  }}">18</a>
</span> 
              <br>
              
              <?php
            $omatsuri_18= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '18']])->count();
            $eiga_18= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '18']])->count();
            $sports_18= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '18']])->count();
            $gurume_18= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '18']])->count();
            $ongaku_18= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '18']])->count();
            $geijutsu_18= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '18']])->count();
            $leisure_18= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '18']])->count();

              ?>
            @if($omatsuri_18 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_18 }})</span>
             @endif
             @if($eiga_18 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_18 }}) </span>
             @endif
             @if($sports_18 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_18 }}) </span>
             @endif
             @if($ongaku_18 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_18 }})</span>
             @endif
             @if($gurume_18 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_18 }})</span>
             @endif
             @if($geijutsu_18 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_18 }}) </span>
             @endif
             @if($leisure_18 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_18 }})</span>
             @endif
            
            
            
              
            </td>
            
<td class="sunday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 19)  }}">19</a>
</span> 
              <br>
              
              <?php
            $omatsuri_19= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '19']])->count();
            $eiga_19= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '19']])->count();
            $sports_19= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '19']])->count();
            $gurume_19= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '19']])->count();
            $ongaku_19= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '19']])->count();
            $geijutsu_19= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '19']])->count();
            $leisure_19= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '19']])->count();

              ?>
            @if($omatsuri_19 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_19 }})</span>
             @endif
             @if($eiga_19 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_19 }}) </span>
             @endif
             @if($sports_19 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_19 }}) </span>
             @endif
             @if($ongaku_19 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_19 }})</span>
             @endif
             @if($gurume_19 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_19 }})</span>
             @endif
             @if($geijutsu_19 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_19 }}) </span>
             @endif
             @if($leisure_19 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_19 }})</span>
             @endif

          
            
              
            </td>
      </tr>
        
        <tr class="week4">
            
<td class="monday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 20)  }}">20</a>
</span> 
              <br>
              
              <?php
            $omatsuri_20= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '20']])->count();
            $eiga_20= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '20']])->count();
            $sports_20= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '20']])->count();
            $gurume_20= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '20']])->count();
            $ongaku_20= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '20']])->count();
            $geijutsu_20= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '20']])->count();
            $leisure_20= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '20']])->count();

              ?>
           
           @if($omatsuri_20 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_20 }})</span>
             @endif
             @if($eiga_20 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_20 }}) </span>
             @endif
             @if($sports_20 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_20 }}) </span>
             @endif
             @if($ongaku_20 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_20 }})</span>
             @endif
             @if($gurume_20 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_20 }})</span>
             @endif
             @if($geijutsu_20 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_20 }}) </span>
             @endif
             @if($leisure_20 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_20 }})</span>
             @endif
           
           
            </td>
            
            <td class="tuesday"><span style="font-weight:bold">
               <a class=daylink href="{{ action ('DayController@day', 21)  }}">21</a>
            </span>
              <br>
              
              <?php
            $omatsuri_21= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '21']])->count();
            $eiga_21= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '21']])->count();
            $sports_21= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '21']])->count();
            $gurume_21= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '21']])->count();
            $ongaku_21= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '21']])->count();
            $geijutsu_21= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '21']])->count();
            $leisure_21= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '21']])->count();

              ?>
            @if($omatsuri_21 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_21 }})</span>
             @endif
             @if($eiga_21 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_21 }}) </span>
             @endif
             @if($sports_21 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_21 }}) </span>
             @endif
             @if($ongaku_21 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_21 }})</span>
             @endif
             @if($gurume_21 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_21 }})</span>
             @endif
             @if($geijutsu_21 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_21 }}) </span>
             @endif
             @if($leisure_21 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_21 }})</span>
             @endif
            
            
            
              
            </td>
<td class="wednesday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 22)  }}">22</a>
</span> 
              <br>
              
              <?php
            $omatsuri_22= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '22']])->count();
            $eiga_22= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '22']])->count();
            $sports_22= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '22']])->count();
            $gurume_22= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '22']])->count();
            $ongaku_22= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '22']])->count();
            $geijutsu_22= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '22']])->count();
            $leisure_22= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '22']])->count();

              ?>
            
            @if($omatsuri_22 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_22 }})</span>
             @endif
             @if($eiga_22 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_22 }}) </span>
             @endif
             @if($sports_22 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_22 }}) </span>
             @endif
             @if($ongaku_22 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_22 }})</span>
             @endif
             @if($gurume_22 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_22 }})</span>
             @endif
             @if($geijutsu_22 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_22 }}) </span>
             @endif
             @if($leisure_22 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_22 }})</span>
             @endif
            
            
              
            </td>
            
<td class="thursday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 23)  }}">23</a>
</span> 
              <br>
              
              <?php
            $omatsuri_23= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '23']])->count();
            $eiga_23= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '23']])->count();
            $sports_23= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '23']])->count();
            $gurume_23= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '23']])->count();
            $ongaku_23= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '23']])->count();
            $geijutsu_23= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '23']])->count();
            $leisure_23= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '23']])->count();

              ?>
              @if($omatsuri_23 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_23 }})</span>
             @endif
             @if($eiga_23 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_23 }}) </span>
             @endif
             @if($sports_23 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_23 }}) </span>
             @endif
             @if($ongaku_23 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_23 }})</span>
             @endif
             @if($gurume_23 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_23 }})</span>
             @endif
             @if($geijutsu_23 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_23 }}) </span>
             @endif
             @if($leisure_23 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_23 }})</span>
            @endif
            
            
            
              
            </td>

<td class="friday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 24)  }}">24</a>
</span> 
              <br>
              
              <?php
            $omatsuri_24= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '24']])->count();
            $eiga_24= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '24']])->count();
            $sports_24= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '24']])->count();
            $gurume_24= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '24']])->count();
            $ongaku_24= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '24']])->count();
            $geijutsu_24= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '24']])->count();
            $leisure_24= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '24']])->count();

              ?>
            
            @if($omatsuri_24 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_24 }})</span>
             @endif
             @if($eiga_24 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_24 }}) </span>
             @endif
             @if($sports_24 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_24 }}) </span>
             @endif
             @if($ongaku_24 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_24 }})</span>
             @endif
             @if($gurume_24 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_24 }})</span>
             @endif
             @if($geijutsu_24 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_24 }}) </span>
             @endif
             @if($leisure_24 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_24 }})</span>
             @endif
            
            
              
            </td>
<td class="saturday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 25)  }}">25</a>
</span> 
              <br>
              
              <?php
            $omatsuri_25= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '25']])->count();
            $eiga_25= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '25']])->count();
            $sports_25= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '25']])->count();
            $gurume_25= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '25']])->count();
            $ongaku_25= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '25']])->count();
            $geijutsu_25= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '25']])->count();
            $leisure_25= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '25']])->count();

              ?>
           @if($omatsuri_25 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_25 }})</span>
             @endif
             @if($eiga_25 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_25 }}) </span>
             @endif
             @if($sports_25 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_25 }}) </span>
             @endif
             @if($ongaku_25 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_25 }})</span>
             @endif
             @if($gurume_25 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_25 }})</span>
             @endif
             @if($geijutsu_25 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_25 }}) </span>
             @endif
             @if($leisure_25 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_25 }})</span>
             @endif
           
           
           
              
            </td>

<td class="sunday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 26)  }}">26</a>
</span> 
              <br>
              
              <?php
            $omatsuri_26= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '26']])->count();
            $eiga_26= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '26']])->count();
            $sports_26= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '26']])->count();
            $gurume_26= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '26']])->count();
            $ongaku_26= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '26']])->count();
            $geijutsu_26= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '26']])->count();
            $leisure_26= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '26']])->count();

              ?>
            
             @if($omatsuri_26 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_26 }})</span>
             @endif
             @if($eiga_26 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_26 }}) </span>
             @endif
             @if($sports_26 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_26 }}) </span>
             @endif
             @if($ongaku_26 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_26 }})</span>
             @endif
             @if($gurume_26 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_26 }})</span>
             @endif
             @if($geijutsu_26 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_26 }}) </span>
             @endif
             @if($leisure_26 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_26 }})</span>
             @endif
            
            
            
            </td>
            
             </tr>
        
        <tr class="week5">
            
<td class="monday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 27)  }}">27</a>
</span> 
              <br>
              
              <?php
            $omatsuri_27= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '27']])->count();
            $eiga_27= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '27']])->count();
            $sports_27= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '27']])->count();
            $gurume_27= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '27']])->count();
            $ongaku_27= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '27']])->count();
            $geijutsu_27= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '27']])->count();
            $leisure_27= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '27']])->count();

              ?>
             @if($omatsuri_27 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_27 }})</span>
             @endif
             @if($eiga_27 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_27 }}) </span>
             @endif
             @if($sports_27 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_27 }}) </span>
             @endif
             @if($ongaku_27 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_27 }})</span>
             @endif
             @if($gurume_27 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_27 }})</span>
             @endif
             @if($geijutsu_27 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_27 }}) </span>
             @endif
             @if($leisure_27 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_27 }})</span>
             @endif
              
            
            
              
            </td>
            
<td class="tuesday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 28)  }}">28</a>
</span> 
              <br>
              
              <?php
            $omatsuri_28= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '28']])->count();
            $eiga_28= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '28']])->count();
            $sports_28= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '28']])->count();
            $gurume_28= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '28']])->count();
            $ongaku_28= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '28']])->count();
            $geijutsu_28= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '28']])->count();
            $leisure_28= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '28']])->count();

              ?>
             @if($omatsuri_28 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_28 }})</span>
             @endif
             @if($eiga_28 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_28 }}) </span>
             @endif
             @if($sports_28 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_28 }}) </span>
             @endif
             @if($ongaku_28 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_28 }})</span>
             @endif
             @if($gurume_28 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_28 }})</span>
             @endif
             @if($geijutsu_28 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_28 }}) </span>
             @endif
             @if($leisure_28 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_28 }})</span>
             @endif
            
            
              
            </td>

<td class="wednesday"><span style="font-weight:bold">
     <a class=daylink href="{{ action ('DayController@day', 29)  }}">29</a>
</span> 
              <br>
              
              <?php
            $omatsuri_29= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '29']])->count();
            $eiga_29= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '29']])->count();
            $sports_29= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '29']])->count();
            $gurume_29= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '29']])->count();
            $ongaku_29= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '29']])->count();
            $geijutsu_29= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '29']])->count();
            $leisure_29= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '29']])->count();

              ?>
             @if($omatsuri_29 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_29 }})</span>
             @endif
             @if($eiga_29 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_29 }}) </span>
             @endif
             @if($sports_29 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_29 }}) </span>
             @endif
             @if($ongaku_29 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_29 }})</span>
             @endif
             @if($gurume_29 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_29 }})</span>
             @endif
             @if($geijutsu_29 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_29 }}) </span>
             @endif
             @if($leisure_29 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_29 }})</span>
             @endif
            
            
              
            </td>

<td class="thursday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 30)  }}">30</a>
</span> 
              <br>
              
              <?php
            $omatsuri_30= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '30']])->count();
            $eiga_30= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '30']])->count();
            $sports_30= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '30']])->count();
            $gurume_30= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '30']])->count();
            $ongaku_30= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '30']])->count();
            $geijutsu_30= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '30']])->count();
            $leisure_30= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '30']])->count();

              ?>
             @if($omatsuri_30 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_30 }})</span>
             @endif
             @if($eiga_30 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_30 }}) </span>
             @endif
             @if($sports_30 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_30 }}) </span>
             @endif
             @if($ongaku_30 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_30 }})</span>
             @endif
             @if($gurume_30 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_30 }})</span>
             @endif
             @if($geijutsu_30 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_30 }}) </span>
             @endif
             @if($leisure_30 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_30 }})</span>
             @endif
              
              
            
            
            
              
            </td>
<td class="friday"><span style="font-weight:bold">
      <a class=daylink href="{{ action ('DayController@day', 31)  }}">31</a>
</span> 
              <br>
              
              <?php
            $omatsuri_31= DB::table('events')->where([['genre', '=','お祭り・花火大会'],['eventdate', '=', '31']])->count();
            $eiga_31= DB::table('events')->where([['genre', '=','映画'],['eventdate', '=', '31']])->count();
            $sports_31= DB::table('events')->where([['genre', '=', 'スポーツ'],['eventdate', '=', '31']])->count();
            $gurume_31= DB::table('events')->where([['genre', '=','グルメ'],['eventdate', '=', '31']])->count();
            $ongaku_31= DB::table('events')->where([['genre', '=','音楽フェス'],['eventdate', '=', '31']])->count();
            $geijutsu_31= DB::table('events')->where([['genre', '=','芸術'],['eventdate', '=', '31']])->count();
            $leisure_31= DB::table('events')->where([['genre', '=','レジャー'],['eventdate', '=', '31']])->count();

              ?>
            
            
              @if($omatsuri_31 !== 0)
             <span class="glyphicon glyphicon-asterisk">  お祭り ({{ $omatsuri_31 }})</span>
             @endif
             @if($eiga_31 !== 0)
             <span class="glyphicon glyphicon-film">   映画  ({{ $eiga_31 }}) </span>
             @endif
             @if($sports_31 !==0)
             <span class="glyphicon glyphicon-bullhorn">  スポーツ  ({{ $sports_31 }}) </span>
             @endif
             @if($ongaku_31 !== 0)
             <span class="glyphicon glyphicon-music">　音楽 ({{ $ongaku_31 }})</span>
             @endif
             @if($gurume_31 !== 0)
             <span class="glyphicon glyphicon-glass"> グルメ  ({{ $gurume_31 }})</span>
             @endif
             @if($geijutsu_31 !== 0)
             <span class="glyphicon glyphicon-picture">　芸術 ({{$geijutsu_31 }}) </span>
             @endif
             @if($leisure_31 !== 0)
             <span class="glyphicon glyphicon-leaf">  その他  ({{$leisure_31 }})</span>
             @endif
              
            
            
            </td>


            <td></td>
            <td></td>

           
        </tr>
    </tbody>
</table> 

<br>
<br>
<br>