<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSport2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
        DB::table('events')->insert([
        [
          'name' => 'SUZUKA 10HOURS',
          'eventdate' => '25',
          'time' => '9:25',
          'prefecture' => '三重',
          'place' => '鈴鹿サーキット',
          'genre' => 'スポーツ',
          'description' => 'SUPER GTシリーズのGT300クラスや、ブランパンGTシリーズなどに参戦するスーパースポーツカーをベースとしたGT3カーやJAF-GTカーが賞金総額1億円と世界一の座をかけて10時間に及ぶ熱い戦いを繰り広げる。',
          'price' => '5700円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => 'SUZUKA 10HOURS',
          'eventdate' => '26',
          'time' => '8:00',
          'prefecture' => '三重',
          'place' => '鈴鹿サーキット',
          'genre' => 'スポーツ',
          'description' => 'SUPER GTシリーズのGT300クラスや、ブランパンGTシリーズなどに参戦するスーパースポーツカーをベースとしたGT3カーやJAF-GTカーが賞金総額1億円と世界一の座をかけて10時間に及ぶ熱い戦いを繰り広げる。',
          'price' => '5700円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（日本‐イタリア）',
          'eventdate' => '2',
          'time' => '20:00',
          'prefecture' => '千葉',
          'place' => 'ナスパ・スタジアム',
          'genre' => 'スポーツ',
          'description' => '各大陸の代表16か国によって争われる。　開幕戦であるこの試合を皮切りに、千葉県各地の球場で8チームごとの総当たり戦による予選リーグが行われ、上位チームはZOZOマリンスタジアムにて開催される準々決勝にコマを進める。8月12日まで開催予定。',
          'price' => '1500円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（日本‐ボツワナ）',
          'eventdate' => '3',
          'time' => '19:00',
          'prefecture' => '千葉',
          'place' => 'ナスパ・スタジアム',
          'genre' => 'スポーツ',
          'description' => '16か国によって争われる今大会の予選Bリーグ第2戦、アフリカ代表のボツワナと対戦する。8月12日まで開催予定。',
          'price' => '1500円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（日本‐中国）',
          'eventdate' => '4',
          'time' => '19:00',
          'prefecture' => '千葉',
          'place' => 'ナスパ・スタジアム',
          'genre' => 'スポーツ',
          'description' => '16か国によって争われる今大会の予選Bリーグ第3戦、アジア代表の中国と対戦する。8月12日まで開催予定。',
          'price' => '1500円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（日本‐イギリス）',
          'eventdate' => '5',
          'time' => '19:00',
          'prefecture' => '千葉',
          'place' => 'ゼットエーボールパーク',
          'genre' => 'スポーツ',
          'description' => '16か国によって争われる今大会の予選Bリーグ第4戦、ヨーロッパ代表のイギリスと対戦する。',
          'price' => '1500円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（日本‐ベネズエラ）',
          'eventdate' => '6',
          'time' => '19:00',
          'prefecture' => '千葉',
          'place' => 'ゼットエーボールパーク',
          'genre' => 'スポーツ',
          'description' => '16か国によって争われる今大会の予選Bリーグ第5戦、北中南アメリカ代表のベネズエラと対戦する。',
          'price' => '1500円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（日本‐カナダ）',
          'eventdate' => '7',
          'time' => '19:00',
          'prefecture' => '千葉',
          'place' => '秋津野球場',
          'genre' => 'スポーツ',
          'description' => '16か国によって争われる今大会の予選Bリーグ第6戦、北中南アメリカ代表のカナダと対戦する。',
          'price' => '1500円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（日本‐オーストラリア）',
          'eventdate' => '8',
          'time' => '19:00',
          'prefecture' => '千葉',
          'place' => '秋津野球場',
          'genre' => 'スポーツ',
          'description' => '16か国によって争われる今大会の予選Bリーグ第7戦、オセアニア代表のオーストラリアと対戦する。',
          'price' => '1500円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（準々決勝）',
          'eventdate' => '10',
          'time' => '10:00',
          'prefecture' => '千葉',
          'place' => 'ZOZOマリンスタジアム',
          'genre' => 'スポーツ',
          'description' => '各グループリーグ上位4チームずつの計8チームによる決勝トーナメントのうち4試合が行われる。',
          'price' => '2000円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（準決勝）',
          'eventdate' => '11',
          'time' => '9:30',
          'prefecture' => '千葉',
          'place' => 'ZOZOマリンスタジアム',
          'genre' => 'スポーツ',
          'description' => '各グループリーグ上位4チームずつの計8チームによる決勝トーナメントのうち4試合が行われる。',
          'price' => '2000円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '世界女子ソフトボール選手権（決勝）',
          'eventdate' => '12',
          'time' => '19:00',
          'prefecture' => '千葉',
          'place' => 'ZOZOマリンスタジアム',
          'genre' => 'スポーツ',
          'description' => '決勝戦と3位決定戦の2試合が行われる。',
          'price' => '2000円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '岩洞湖4WDオフロードレース',
          'eventdate' => '26',
          'time' => '9:20',
          'prefecture' => '岩手',
          'place' => '盛岡市特設会場',
          'genre' => 'スポーツ',
          'description' => '年間5戦のトータルポイントで争われる、JOR（ジャパンオフロードレース）シリーズの第3戦。S,C,Xクラスのレースが行われる。',
          'price' => '1000円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '大相撲　立川立飛場所',
          'eventdate' => '22',
          'time' => '8:00',
          'prefecture' => '東京',
          'place' => '立川立飛アリーナ',
          'genre' => 'スポーツ',
          'description' => '各段力士の取り組みに加え、力士たちによる公開稽古や、握手会、相撲のルールをを面白おかしく伝える初っ切り、歌うま力士による相撲甚句の披露など、本場所では見られない多彩なコンテンツがみられる。力士たちと近い距離で触れ合える１日。',
          'price' => '6000円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '大相撲　渋谷青山学院場所',
          'eventdate' => '',
          'time' => '8:00',
          'prefecture' => '東京',
          'place' => '青山学院記念館"',
          'genre' => 'スポーツ',
          'description' => '各段力士の取り組みに加え、力士たちによる公開稽古や、握手会、相撲のルールをを面白おかしく伝える初っ切り、歌うま力士による相撲甚句の披露など、本場所では見られない多彩なコンテンツがみられる。力士たちと近い距離で触れ合える１日。',
          'price' => '6000円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '夏の甲子園　（開会式）',
          'eventdate' => '5',
          'time' => '9:00',
          'prefecture' => '兵庫',
          'place' => '阪神甲子園球場',
          'genre' => 'スポーツ',
          'description' => '記念すべき100回大会。史上最多の56代表校が出場する今大会の開会式に加え、3試合が行われる。',
          'price' => '0円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '夏の甲子園（決勝）',
          'eventdate' => '21',
          'time' => '14:00',
          'prefecture' => '兵庫',
          'place' => '阪神甲子園球場',
          'genre' => 'スポーツ',
          'description' => '記念すべき100回大会。史上最多の56代表校が出場する今大会の王者を決める決勝戦が行われる。（雨天などによる順延の可能性あり）',
          'price' => '0円～',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => 'ヤクルト-広島',
          'eventdate' => '1',
          'time' => '18:00',
          'prefecture' => '東京',
          'place' => '明治神宮球場',
          'genre' => 'スポーツ',
          'description' => '歴代の燕パワーユニホームなどを含む、全12種類の対象ユニホームを着用で先着5,000名様に燕日ミニ扇風機をプレゼント！',
          'price' => '東京ヤクルトスワローズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => 'ヤクルト-広島',
          'eventdate' => '2',
          'time' => '18:00',
          'prefecture' => '東京',
          'place' => '明治神宮球場',
          'genre' => 'スポーツ',
          'description' => '歴代の燕パワーユニホームなどを含む、全12種類の対象ユニホームを着用で先着5,000名様に燕日法被織手ぬぐいをプレゼント！',
          'price' => '東京ヤクルトスワローズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => 'ヤクルト-DeNA',
          'eventdate' => '24',
          'time' => '18:00',
          'prefecture' => '東京',
          'place' => '明治神宮野球場',
          'genre' => 'スポーツ',
          'description' => '生ビールが通常750円のとこり350円で販売される。５回裏終了時には300発の花火の打ち上げもあります！',
          'price' => '東京ヤクルトスワローズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '巨人-広島',
          'eventdate' => '28',
          'time' => '18:00',
          'prefecture' => '東京',
          'place' => '東京ドーム',
          'genre' => 'スポーツ',
          'description' => '「ももクロDAY」ももいろクローバーZのメンバーが来場！',
          'price' => '読売巨人軍公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
        [
          'name' => '巨人-広島',
          'eventdate' => '29',
          'time' => '18:00',
          'prefecture' => '東京',
          'place' => '東京ドーム',
          'genre' => 'スポーツ',
          'description' => 'キティちゃんが来場！',
          'price' => '読売巨人軍公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '',
        ],
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
    }
}
