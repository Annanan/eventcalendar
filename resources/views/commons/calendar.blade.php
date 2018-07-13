


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
            
            
            <td class="wednesday"><span style="font-weight:bold">1</span> 
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
            
            <td class="thursday"><span style="font-weight:bold">2</span>
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
            
            <td class="friday"><span style="font-weight:bold">3</span>
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
            
            <td class="saturday"><span style="font-weight:bold">4</span>
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
            
            <td class="sunday"><span style="font-weight:bold">5</span>
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
            <td class="monday"><span style="font-weight:bold">6</span>
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
            
            <td class="tuesday"><span style="font-weight:bold">7</span>
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
            
            <td class="wednesday"><span style="font-weight:bold">8</span>
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
           
            <td class="thursday"><span style="font-weight:bold">9</span>
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
           
            <td class="friday"><span style="font-weight:bold">10</span>
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
           
            <td class="saturday"><span style="font-weight:bold">11</span>
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
              
            <td class="sunday"><span style="font-weight:bold">12</span>
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
            <td class="monday"><span style="font-weight:bold">13</span>
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
            
            <td class="tuesday"><span style="font-weight:bold">14</span>
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
            
            <td class="wednesday"><span style="font-weight:bold">15</span>
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
            
            <td class="thursday"><span style="font-weight:bold">16</span>
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
            
            <td class="friday"><span style="font-weight:bold">17</span>
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
            
            <td class="saturday"><span style="font-weight:bold">18</span>
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
            
            <td class="sunday"><span style="font-weight:bold">19</span>
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
            <td class="monday"><span style="font-weight:bold">20</span>
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
            
            <td class="tuesday"><span style="font-weight:bold">21</span>
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
            
            <td class="wednesday"><span style="font-weight:bold">22</span>
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
            
            <td class="thursday"><span style="font-weight:bold">23</span>
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
            
            <td class="friday"><span style="font-weight:bold">24</span>
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
            
            <td class="saturday"><span style="font-weight:bold">25</span>
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
            
            <td class="sunday"><span style="font-weight:bold">26</span>
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
            <td class="monday"><span style="font-weight:bold">27</span>
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
            
            <td class="tuesday"><span style="font-weight:bold">28</span>
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
            
            <td class="wednesday"><span style="font-weight:bold">29</span>
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
            
            <td class="thursday"><span style="font-weight:bold">30</span>
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
            
            <td class="friday"><span style="font-weight:bold">31</span>
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
