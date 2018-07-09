


<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">





<table border="1" class="kotei">
    <thead>
        <tr class="youbi">
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
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==1){ 
                
                      
                  echo $event->name .'('. $event->prefecture .')'  
             ?>
              @if (Auth::user())
              @include ('favorites.favorite_button')
              @endif
              <?php
              '<br>';
                      
                      
                  }
              } ?> 

              
              </td>
            
            <td class="thursday">2
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==2){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
              </td>
            
            <td class="friday">3
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==3){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
              </td>
            
            <td class="saturday">4
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==4){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="sunday">5
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==5){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
        </tr>
        <tr class="week2">
            <td class="monday">6
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==6){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="tuesday">7
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==7){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="wednesday">8
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==8){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
           
            <td class="thursday">9
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==9){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
           
            <td class="friday">10
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==10){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
           
            <td class="saturday">11
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==11){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
              
            <td class="sunday">12
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==12){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
        </tr>
        
        <tr class="week3">
            <td class="monday">13
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==13){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="tuesday">14
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==14){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="wednesday">15
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==15){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="thursday">16
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==16){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="friday">17
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==17){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="saturday">18
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==18){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="sunday">19
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==19){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
        </tr>
        
        <tr class="week4">
            <td class="monday">20
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==20){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="tuesday">21
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==21){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="wednesday">22
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==22){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="thursday">23
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==23){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="friday">24
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==24){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="saturday">25
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==25){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="sunday">26
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==26){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
        </tr>
        
        <tr class="week5">
            <td class="monday">27
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==27){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="tuesday">28
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==28){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="wednesday">29
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==29){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="thursday">30
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==30){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            
            <td class="friday">31
              <br> 
              <?php foreach ($events as $event) {  
                  if($event->eventdate ==31){
                   echo $event->name .'('. $event->prefecture .')' .'<br>';  }
              }?> 
            </td>
            <td class="saturday"></td>
            <td class="sunday"></td>
        </tr>
    </tbody>
</table> 
