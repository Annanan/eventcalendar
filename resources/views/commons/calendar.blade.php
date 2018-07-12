


<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">





<table border="1" class="kotei">
    <thead>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
            <th>日</th>
        </tr>
    </thead>
    <tbody>
        <tr class="week1">
            <td class="monday"></td>
            <td class="tuesday"></td>
            
            
            <td class="wednesday">1 
              <br>
              <span>
              <?php foreach ($events as $event) {  
                if($event->eventdate ==1){ 
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                  echo'('. $event->prefecture .')';
              ?>
                {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="thursday">2
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==2){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              
              <?php
              print '<br>';
                }
              }?>
                </span>
              </td>
            
            <td class="friday">3
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==3){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
                </span>
              </td>
            
            <td class="saturday">4
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==4){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="sunday">5
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==5){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
        </tr>
        <tr class="week2">
            <td class="monday">6
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==6){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo '('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="tuesday">7
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==7){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="wednesday">8
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==8){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
           
            <td class="thursday">9
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==9){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
           
            <td class="friday">10
              <br>
              <span>
              <?php foreach ($events as $event) {
                  if($event->eventdate ==10){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
           
            <td class="saturday">11
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==11){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
              
            <td class="sunday">12
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==12){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
        </tr>
        
        <tr class="week3">
            <td class="monday">13
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==13){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="tuesday">14
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==14){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="wednesday">15
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==15){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="thursday">16
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==16){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="friday">17
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==17){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="saturday">18
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==18){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="sunday">19
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==19){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
        </tr>
        
        <tr class="week4">
            <td class="monday">20
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==20){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="tuesday">21
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==21){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="wednesday">22
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==22){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="thursday">23
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==23){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="friday">24
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==24){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="saturday">25
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==25){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="sunday">26
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==26){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
        </tr>
        
        <tr class="week5">
            <td class="monday">27
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==27){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="tuesday">28
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==28){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="wednesday">29
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==29){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="thursday">30
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==30){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            
            <td class="friday">31
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==31){
              ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
                    echo'('. $event->prefecture .')';
              ?>
                  {!! link_to_route('events.show', $event->name, ['id' => $event->id]) !!}
              <?php
              print '<br>';
                }
              } 
              ?>
              </span>
            </td>
            <td class="saturday"></td>
            <td class="sunday"></td>
        </tr>
    </tbody>
</table> 
