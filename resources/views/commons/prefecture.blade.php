
<link rel="stylesheet" href="{{ secure_asset('css/navbar3.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="dropdown">
    <a class=ken  href="#"class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">その他の都道府県で検索</a>

<form action="search" method="post" accept-charset=utf-8>
    {{ csrf_field() }}

<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />

<div class="modal fade"id="basicModal"tabindex="-1"role="dialog"aria-labelledby="basicModal"aria-hidden="true">
    <div class="modal-dialog">
        <div  class =gamen class="modal-content">
            <div class="modal-header">
                　　<h4 class="modal-title"id="myModalLabel">都道府県で検索（複数選択可）</h4></div>
                　　　　<div class="modal-body">

  <div class=ichiran>
    首都圏:
    <label for="tokyo">東京</label>
    <input id="tokyo" type="checkbox" name="search[]" value="13" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="kanagawa">神奈川</label>
    <input id="kanagawa" type="checkbox" name="search[]" value="14" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="saitama">埼玉</label>
    <input id="saitama" type="checkbox" name="search[]" value="11" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="chiba">千葉</label>
    <input id="chiba" type="checkbox" name="search[]" value="12" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    北関東:
    <label for="ibaraki">茨城</label>
    <input id="ibaraki" type="checkbox" name="search[]" value="8" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <label for="gunma">群馬</label>
    <input id="gunma" type="checkbox" name="search[]" value="10" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    東北:
    <label for="hokkaido">北海道</label>
    <input id="hokkaido" type="checkbox" name="search[]" value="1" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for=aomori>青森</label>
    <input id="aomori" type="checkbox" name="search[]" value="2" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="iwate">岩手</label>
    <input id="iwate" type="checkbox" name="search[]" value="3" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="miyagi">宮城</label>
    <input id="miyagi" type="checkbox" name="search[]" value="4" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="akita">秋田</label>
    <input id="akita" type="checkbox" name="search[]" value="5" >&nbsp;&nbsp;&nbsp;&nbsp;
     <label for="fukushima">福島</label>
    <input id="fukushima" type="checkbox" name="search[]" value="7" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    甲信越:
    <label for="niigata">新潟</label>
    <input id="niigata" type="checkbox" name="search[]" value="15" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="yamanashi">山梨</label>
    <input id="yamanashi" type="checkbox" name="search[]" value="19" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    北陸:
    <label for="toyama">富山</label>
    <input id="toyama" type="checkbox" name="search[]" value="16" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <label for="fukui">福井</label>
    <input id="hukui" type="checkbox" name="search[]" value="18" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    東海:
    <label for="aichi">愛知</label>
    <input id="aichi" type="checkbox" name="search[]" value="23" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <label for="mie">三重</label>
    <input id="mie" type="checkbox" name="search[]" value="24" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    近畿:
    <label for="osaka">大阪</label>
    <input id="osaka" type="checkbox" name="search[]" value="27" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="hyogo">兵庫</label>
    <input id="hyogo" type="checkbox" name="search[]" value="28" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="kyoto">京都</label>
    <input id="kyoto" type="checkbox" name="search[]" value="26" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="shiga">滋賀</label>
    <input id="shiga" type="checkbox" name="search[]" value="25" >&nbsp;&nbsp;&nbsp;&nbsp;
   
    <br>
    中国:
   
    <label for=okayama>岡山</label>
    <input id="okayama" type="checkbox" name="search[]" value="33" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    四国:
    <label for='tokushima'>徳島</label>
    <input id="tokushima" type="checkbox" name="search[]" value="36" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="kagawa">香川</label>
    <input id="kagawa" type="checkbox" name="search[]" value="37" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="ehime">愛媛</label>
    <input id="ehime" type="checkbox" name="search[]" value="38" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="kouchi">高知</label>
    <input id="kouchi" type="checkbox" name="search[]" value="39" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    九州:
    <label for="fukuoka">福岡</label>
    <input id="fukuoka" type="checkbox" name="search[]" value="40" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="nagasaki">長崎</label>
    <input id="nagasaki" type="checkbox" name="search[]" value="42" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for='okinawa'>沖縄</label>
    <input id="okinawa" type="checkbox" name="search[]" value="47" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    
    <input type="submit"  value="検索する！"></form>
    
  </div>
                  </div>
    <hr>
                  <div class="zeroken">
 <p> イベント0件の県　（17県）</p>
 <p>山形 栃木 石川 長野 岐阜 静岡 奈良 和歌山 <br> 鳥取 島根 広島 山口 佐賀 熊本 大分 宮崎 鹿児島</p>

    </div></div></div></div>
 </div>

 
 
 