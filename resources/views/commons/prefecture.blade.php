
<form action="search" method="post" accept-charset=utf-8>
    {{ csrf_field() }}

<div class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">都道府県で検索<span class="caret"></span></a>
<ul class="dropdown-menu">
    <label for="全国">全国</label>
    <input id="zenkoku" type="checkbox" name="search" value="48" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="北海道">北海道</label>
    <input id="hokkaido" type="checkbox" name="search" value="1" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="青森">青森</label>
    <input id="aomori" type="checkbox" name="search" value="2" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="岩手">岩手</label>
    <input id="iwate" type="checkbox" name="search" value="3" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="宮城">宮城</label>
    <input id="miyagi" type="checkbox" name="search" value="4" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="秋田">秋田</label>
    <input id="akita" type="checkbox" name="search" value="5" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="山形">山形</label>
    <input id="yamagata" type="checkbox" name="search" value="6" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="福島">福島</label>
    <input id="fukushima" type="checkbox" name="search" value="7" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="茨城">茨城</label>
    <input id="ibaraki" type="checkbox" name="search" value="8" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="栃木">栃木</label>
    <input id="tochigi" type="checkbox" name="search" value="9" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="群馬">群馬</label>
    <input id="gunma" type="checkbox" name="search" value="10" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="埼玉">埼玉</label>
    <input id="saitama" type="checkbox" name="search" value="11" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="千葉">千葉</label>
    <input id="chiba" type="checkbox" name="search" value="12" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="東京">東京</label>
    <input id="tokyo" type="checkbox" name="search" value="13" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="神奈川">神奈川</label>
    <input id="kanagawa" type="checkbox" name="search" value="14" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="新潟">新潟</label>
    <input id="niigata" type="checkbox" name="search" value="15" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="富山">富山</label>
    <input id="toyama" type="checkbox" name="search" value="16" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="石川">石川</label>
    <input id="ishikawa" type="checkbox" name="search" value="17" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="福井">福井</label>
    <input id="hukui" type="checkbox" name="search" value="18" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="山梨">山梨</label>
    <input id="yamanashi" type="checkbox" name="search" value="19" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="長野">長野</label>
    <input id="nagano" type="checkbox" name="search" value="20" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="岐阜">岐阜</label>
    <input id="gihu" type="checkbox" name="search" value="21" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="静岡">静岡</label>
    <input id="shizuoka" type="checkbox" name="search" value="22" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="愛知">愛知</label>
    <input id="aichi" type="checkbox" name="search" value="23" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="三重">三重</label>
    <input id="mie" type="checkbox" name="search" value="24" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="滋賀">滋賀</label>
    <input id="shiga" type="checkbox" name="search" value="25" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="京都">京都</label>
    <input id="kyoto" type="checkbox" name="search" value="26" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="大阪">大阪</label>
    <input id="osaka" type="checkbox" name="search" value="27" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="兵庫">兵庫</label>
    <input id="hyogo" type="checkbox" name="search" value="28" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="奈良">奈良</label>
    <input id="nara" type="checkbox" name="search" value="29" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="和歌山">和歌山</label>
    <input id="wakayama" type="checkbox" name="search" value="30" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="鳥取">鳥取</label>
    <input id="tottori" type="checkbox" name="search" value="31" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="島根">島根</label>
    <input id="shimane" type="checkbox" name="search" value="32">&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="岡山">岡山</label>
    <input id="okayama" type="checkbox" name="search" value="33" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="広島">広島</label>
    <input id="hiroshima" type="checkbox" name="search" value="34" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="山口">山口</label>
    <input id="yamaguchi" type="checkbox" name="search" value="35" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for='徳島'>徳島</label>
    <input id="tokushima" type="checkbox" name="search" value="36" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="香川">香川</label>
    <input id="kagawa" type="checkbox" name="search" value="37" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="愛媛">愛媛</label>
    <input id="ehime" type="checkbox" name="search" value="38" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="高知">高知</label>
    <input id="kouchi" type="checkbox" name="search" value="39" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="福岡">福岡</label>
    <input id="fukuoka" type="checkbox" name="search" value="40" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="佐賀">佐賀</label>
    <input id="saga" type="checkbox" name="search" value="41" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="長崎">長崎</label>
    <input id="nagasaki" type="checkbox" name="search" value="42" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="熊本">熊本</label>
    <input id="kumamoto" type="checkbox" name="search" value="43" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="大分">大分</label>
    <input id="oita" type="checkbox" name="search" value="44" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="宮崎">宮崎</label>
    <input id="miyazaki" type="checkbox" name="search" value="45" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="鹿児島">鹿児島</label>
    <input id="kagoshima" type="checkbox" name="search" value="46" >&nbsp;&nbsp;&nbsp;&nbsp;
    <label for='沖縄'>沖縄</label>
    <input id="okinawa" type="checkbox" name="search" value="47" >&nbsp;&nbsp;&nbsp;&nbsp;
    
    <input type="submit" value="検索">
</ul>
</div>

 
 
 </form>