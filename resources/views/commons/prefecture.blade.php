
<form action="search" method="post" accept-charset=utf-8>
    {{ csrf_field() }}
<link rel="stylesheet" href="{{ secure_asset('css/navbar3.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />


<div class="dropdown">
    <a class=ken href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">その他の都道府県で検索<span class="caret"></span></a>
<ul class="dropdown-menu">
  <div class=ichiran>
      
    <label for="全国">全国</label>
    <input id="zenkoku" type="checkbox" name="search[]" value="48" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
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
    <label for="tochigi">栃木</label>
    <input id="tochigi" type="checkbox" name="search[]" value="9" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="gunma">群馬</label>
    <input id="gunma" type="checkbox" name="search[]" value="10" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    東北:
    <label for="hokkaido">北海道</label>
    <input id="hokkaido" type="checkbox" name="search[]" value="1" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for=aomori>青森</label>
    <input id="aomori" type="checkbox" name="search[]" value="2" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="iwate">岩手</label>
    <input id="iwate" type="checkbox" name="search[]" value="3" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="miyagi">宮城</label>
    <input id="miyagi" type="checkbox" name="search[]" value="4" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="akita">秋田</label>
    <input id="akita" type="checkbox" name="search[]" value="5" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="yamagata">山形</label>
    <input id="yamagata" type="checkbox" name="search[]" value="6" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="fukushima">福島</label>
    <input id="fukushima" type="checkbox" name="search[]" value="7" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    甲信越:
    <label for="niigata">新潟</label>
    <input id="niigata" type="checkbox" name="search[]" value="15" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="yamanashi">山梨</label>
    <input id="yamanashi" type="checkbox" name="search[]" value="19" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="nagano">長野</label>
    <input id="nagano" type="checkbox" name="search[]" value="20" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    北陸:
    <label for="toyama">富山</label>
    <input id="toyama" type="checkbox" name="search[]" value="16" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="ishikawa">石川</label>
    <input id="ishikawa" type="checkbox" name="search[]" value="17" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="fukui">福井</label>
    <input id="hukui" type="checkbox" name="search[]" value="18" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    東海:
    <label for="aichi">愛知</label>
    <input id="aichi" type="checkbox" name="search[]" value="23" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="gifu">岐阜</label>
    <input id="gihu" type="checkbox" name="search[]" value="21" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="shizuoka">静岡</label>
    <input id="shizuoka" type="checkbox" name="search[]" value="22" >&nbsp;&nbsp;&nbsp;&nbsp;
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
    <label for="nara">奈良</label>
    <input id="nara" type="checkbox" name="search[]" value="29" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="wakayama">和歌山</label>
    <input id="wakayama" type="checkbox" name="search[]" value="30" >&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    中国:
    <label for='tottori'>鳥取</label>
    <input id="tottori" type="checkbox" name="search[]" value="31"/>&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="shimane">島根</label>
    <input id="shimane" type="checkbox" name="search[]" value="32">&nbsp;&nbsp;&nbsp;&nbsp;
    <label for=okayama>岡山</label>
    <input id="okayama" type="checkbox" name="search[]" value="33" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="hiroshima">広島</label>
    <input id="hiroshima" type="checkbox" name="search[]" value="34" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="yamaguchi">山口</label>
    <input id="yamaguchi" type="checkbox" name="search[]" value="35" >&nbsp;&nbsp;&nbsp;&nbsp;
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
    <label for="saga">佐賀</label>
    <input id="saga" type="checkbox" name="search[]" value="41" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="nagasaki">長崎</label>
    <input id="nagasaki" type="checkbox" name="search[]" value="42" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="kumamoto">熊本</label>
    <input id="kumamoto" type="checkbox" name="search[]" value="43" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="oita">大分</label>
    <input id="oita" type="checkbox" name="search[]" value="44" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="miyazaki">宮崎</label>
    <input id="miyazaki" type="checkbox" name="search[]" value="45" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="kagoshima">鹿児島</label>
    <input id="kagoshima" type="checkbox" name="search[]" value="46" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for='okinawa'>沖縄</label>
    <input id="okinawa" type="checkbox" name="search[]" value="47" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    
    <input type="submit" value="検索">
  </div>
</ul>
</div>

 
 
 </form>