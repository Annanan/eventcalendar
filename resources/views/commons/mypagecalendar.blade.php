

<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




<table border="3" class="kotei">
    <thead>
      
      <br>
       <tr class="mypagenoyoubi">
            <th class= w3-wide>MON</th>
            <th class= w3-wide>TUE</th>
            <th class= w3-wide>WED</th>
            <th class= w3-wide>THU</th>
            <th class= w3-wide>FRI</th>
            <th class= w3-wide><font color="blue">SAT</font></th>
            <th class= w3-wide><font color="red">SUN</font></th>
        </tr>
    </thead>
    <tbody>
        <tr class="week1">
            <td class="monday"></td>
            <td class="tuesday"> </td>
            
            
            <td class="wednesday"><span style="font-weight:bold">1</span> 
              <br>
             
              
             
              <?php foreach ($events as $event) {  
                if($event->eventdate ==1){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
             
            </td>
            
            <td class="thursday"><span style="font-weight:bold">2</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==2){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
              </td>
            
            <td class="friday"><span style="font-weight:bold">3</span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==3){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
              </td>
            
            <td class="saturday"><span style="font-weight:bold"><font color="blue">4</font></span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==4){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="sunday"><span style="font-weight:bold"><font color="red">5</font></span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==5){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
        </tr>
        <tr class="week2">
            <td class="monday"><span style="font-weight:bold">6</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==6){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="tuesday"><span style="font-weight:bold">7</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==7){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="wednesday"><span style="font-weight:bold">8</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==8){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
           
            <td class="thursday"><span style="font-weight:bold">9</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==9){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
           
            <td class="friday"><span style="font-weight:bold">10</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==10){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
           
            <td class="saturday"><span style="font-weight:bold"><font color="blue">11</font></span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==11){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
              
            <td class="sunday"><span style="font-weight:bold"><font color="red">12</font></span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==12){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
        </tr>
        
        <tr class="week3">
            <td class="monday"><span style="font-weight:bold">13</span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==13){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="tuesday"><span style="font-weight:bold">14</span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==14){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="wednesday"><span style="font-weight:bold">15</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==15){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="thursday"><span style="font-weight:bold">16</span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==16){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="friday"><span style="font-weight:bold">17</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==17){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="saturday"><span style="font-weight:bold"><font color="blue">18</font></span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==18){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="sunday"><span style="font-weight:bold"><font color="red">19</font></span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==19){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
        </tr>
        
        <tr class="week4">
            <td class="monday"><span style="font-weight:bold">20</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==20){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="tuesday"><span style="font-weight:bold">21</span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==21){
                echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="wednesday"><span style="font-weight:bold">22</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==22){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="thursday"><span style="font-weight:bold">23</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==23){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="friday"><span style="font-weight:bold">24</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==24){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="saturday"><span style="font-weight:bold"><font color="blue">25</font></span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==25){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="sunday"><span style="font-weight:bold"><font color="red">26</font></span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==26){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
        </tr>
        
        <tr class="week5">
            <td class="monday"><span style="font-weight:bold">27</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==27){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="tuesday"><span style="font-weight:bold">28</span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==28){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="wednesday"><span style="font-weight:bold">29</span>
              <br>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==29){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="thursday"><span style="font-weight:bold">30</span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==30){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            
            <td class="friday"><span style="font-weight:bold">31</span>
              <br>
             <?php foreach ($events as $event) {  
                if($event->eventdate ==31){ 
                  if ($user->boshuchu($event->id)){?><span class='boshu'> <?php ;}
                  else{?> <span> <?php ;}
                
              echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              </span>
              <?php
              print '<br>';
                }
              } 
              ?>
              
            </td>
            <td class="saturday"></td>
            <td class="sunday"></td>
        </tr>
    </tbody>
</table> 

