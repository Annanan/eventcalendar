

<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




<table border="3" class="kotei">
    <thead>
      
      <br>
      <br>
       <tr class="youbi, w3-background w3-deep-purple">
            <th>MON</th>
            <th>TUE</th>
            <th>WED</th>
            <th>THU</th>
            <th>FRI</th>
            <th><font color="blue">SAT</font></th>
            <th><font color="red">SUN</font></th>
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
            
            <td class="saturday"><span style="font-weight:bold"><font color="blue">4</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==4){
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
            
            <td class="sunday"><span style="font-weight:bold"><font color="red">5</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==5){
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
           
            <td class="saturday"><span style="font-weight:bold"><font color="blue">11</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==11){
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
              
            <td class="sunday"><span style="font-weight:bold"><font color="red">12</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==12){
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
            
            <td class="saturday"><span style="font-weight:bold"><font color="blue">18</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==18){
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
            
            <td class="sunday"><span style="font-weight:bold"><font color="red">19</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==19){
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
            
            <td class="saturday"><span style="font-weight:bold"><font color="blue">25</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==25){
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
            
            <td class="sunday"><span style="font-weight:bold"><font color="red">26</font></span>
              <br>
              <span>
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==26){
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
