<!--@for ($i = 1; $i <= 5; $i++)-->
<!--@endfor-->


@foreach($events as $event)


@endforeach


<table border="1">
<tr>
<?php



for ($i = 1; $i <= 2; $i++) {
    echo "<td>　</td>";
}


for ($i = 1; $i < 32; $i++)
{
    
if ($i%7 == 6) {       echo "</tr>";}



if ($i== $event->date){
    echo "<td>$i  $event->name ($event->prefecture) </td>" ;}
    
else{
    echo "<td>$i</td>";}




    
}




?>
</tr>
</table>





<!--<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">-->





<!--<table border="1" class="kotei">-->
<!--    <thead>-->
<!--        <tr class="youbi">-->
<!--            <th>月</th>-->
<!--            <th>火</th>-->
<!--            <th>水</th>-->
<!--            <th>木</th>-->
<!--            <th>金</th>-->
<!--            <th>土</th>-->
<!--            <th>日</th>-->
<!--        </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        <tr class="week1">-->
<!--            <td class="monday"></td>-->
<!--            <td class="tuesday"></td>-->
<!--            <td class="wednesday">{{ $i }}<br>{{ $event->name . $event->prefecture }}</td>-->
<!--            <td class="thursday">{{  $i }}<br>{{ $event->name . $event->prefecture }}</td>-->
<!--            <td class="friday">{{  $i }}<br>{{ $event->name . $event->prefecture }}</td>-->
<!--            <td class="saturday">{{  $i }}<br>{{ $event->name . $event->prefecture }}</td>-->
<!--            <td class="sunday">{{  $i }}<br>{{ $event->name . $event->prefecture }}</td>-->
<!--        </tr>-->
<!--        <tr class="week2">-->
<!--            <td class="monday">6</td>-->
<!--            <td class="tuesday">7</td>-->
<!--            <td class="wednesday">8</td>-->
<!--            <td class="thursday">9</td>-->
<!--            <td class="friday">10</td>-->
<!--            <td class="saturday">11</td>-->
<!--            <td class="sunday">12</td>-->
<!--        </tr>-->
<!--        <tr class="week3">-->
<!--            <td class="monday">13</td>-->
<!--            <td class="tuesday">14</td>-->
<!--            <td class="wednesday">15</td>-->
<!--            <td class="thursday">16</td>-->
<!--            <td class="friday">17</td>-->
<!--            <td class="saturday">18</td>-->
<!--            <td class="sunday">19</td>-->
<!--        </tr>-->
<!--        <tr class="week4">-->
<!--            <td class="monday">20</td>-->
<!--            <td class="tuesday">21</td>-->
<!--            <td class="wednesday">22</td>-->
<!--            <td class="thursday">23</td>-->
<!--            <td class="friday">24</td>-->
<!--            <td class="saturday">25</td>-->
<!--            <td class="sunday">26</td>-->
<!--        </tr>-->
<!--        <tr class="week5">-->
<!--            <td class="monday">27</td>-->
<!--            <td class="tuesday">28</td>-->
<!--            <td class="wednesday">29</td>-->
<!--            <td class="thursday">30</td>-->
<!--            <td class="friday">31</td>-->
<!--            <td class="saturday"></td>-->
<!--            <td class="sunday"></td>-->
<!--        </tr>-->
<!--    </tbody>-->
<!--</table> -->
