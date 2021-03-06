<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOmatsuri2 extends Migration
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
          'name' => '沖縄全島エイサー祭り',
          'eventdate' => '31',
          'time' => '-',
          'prefecture' => '沖縄',
          'place' => '沖縄全島',
          'genre' => 'お祭り・花火大会',
          'description' => '1956年から続いている歴史あるお祭りで、今では沖縄の夏の風物詩として日本を代表する祭りの一つとなっている。',
          'price' => '1000円~2500円',
          'genrenum' => '2',
          'prefecturenum' => '47',
        ],
        [
          'name' => '仙台七夕まつり',
          'eventdate' => '6',
          'time' => '-',
          'prefecture' => '宮城',
          'place' => '仙台市仙台駅周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '「東北三大祭り」のひとつで、仙台藩初代藩主・伊達政宗公の時代から続いている歴史あるお祭り。8月8日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '4',
        ],
        [
          'name' => '仙台七夕まつり',
          'eventdate' => '7',
          'time' => '-',
          'prefecture' => '宮城',
          'place' => '仙台市仙台駅周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '「東北三大祭り」のひとつで、仙台藩初代藩主・伊達政宗公の時代から続いている歴史あるお祭り。8月8日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '4',
        ],
        [
          'name' => '仙台七夕まつり',
          'eventdate' => '8',
          'time' => '-',
          'prefecture' => '宮城',
          'place' => '仙台市仙台駅周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '「東北三大祭り」のひとつで、仙台藩初代藩主・伊達政宗公の時代から続いている歴史あるお祭り。8月8日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '4',
        ],
        [
          'name' => '秋田竿燈まつり',
          'eventdate' => '3',
          'time' => '-',
          'prefecture' => '秋田',
          'place' => '秋田市二丁目橋から山王十字路までの竿灯大通り',
          'genre' => 'お祭り・花火大会',
          'description' => '豊作を祈るお祭り。竿燈を稲穂に、連なる提灯を米俵に見立て、手のひらや額・腰・肩などに巧みに乗せる離れ業は必見。8月6日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '5',
        ],
        [
          'name' => '秋田竿燈まつり',
          'eventdate' => '4',
          'time' => '-',
          'prefecture' => '秋田',
          'place' => '秋田市二丁目橋から山王十字路までの竿灯大通り',
          'genre' => 'お祭り・花火大会',
          'description' => '豊作を祈るお祭り。竿燈を稲穂に、連なる提灯を米俵に見立て、手のひらや額・腰・肩などに巧みに乗せる離れ業は必見。8月6日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '5',
        ],
        [
          'name' => '秋田竿燈まつり',
          'eventdate' => '5',
          'time' => '-',
          'prefecture' => '秋田',
          'place' => '秋田市二丁目橋から山王十字路までの竿灯大通り',
          'genre' => 'お祭り・花火大会',
          'description' => '豊作を祈るお祭り。竿燈を稲穂に、連なる提灯を米俵に見立て、手のひらや額・腰・肩などに巧みに乗せる離れ業は必見。8月6日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '5',
        ],
        [
          'name' => '秋田竿燈まつり',
          'eventdate' => '6',
          'time' => '-',
          'prefecture' => '秋田',
          'place' => '秋田市二丁目橋から山王十字路までの竿灯大通り',
          'genre' => 'お祭り・花火大会',
          'description' => '豊作を祈るお祭り。竿燈を稲穂に、連なる提灯を米俵に見立て、手のひらや額・腰・肩などに巧みに乗せる離れ業は必見。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '5',
        ],
        [
          'name' => 'よさこい祭り',
          'eventdate' => '9',
          'time' => '-',
          'prefecture' => '高知',
          'place' => '高知市中央公園',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月9日～8月12日の4日間にわたって開催され、「鳴子（なるこ）」と呼ばれる道具を持った踊り子たちがよさこい節に合わせて市内各地を踊り歩く。それぞれのチームがアレンジした多種多様な楽曲や振付が披露される。8月12日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '39',
        ],
        [
          'name' => 'よさこい祭り',
          'eventdate' => '10',
          'time' => '-',
          'prefecture' => '高知',
          'place' => '高知市中央公園',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月9日～8月12日の4日間にわたって開催され、「鳴子（なるこ）」と呼ばれる道具を持った踊り子たちがよさこい節に合わせて市内各地を踊り歩く。それぞれのチームがアレンジした多種多様な楽曲や振付が披露される。8月12日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '39',
        ],
        [
          'name' => 'よさこい祭り',
          'eventdate' => '11',
          'time' => '-',
          'prefecture' => '高知',
          'place' => '高知市中央公園',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月9日～8月12日の4日間にわたって開催され、「鳴子（なるこ）」と呼ばれる道具を持った踊り子たちがよさこい節に合わせて市内各地を踊り歩く。それぞれのチームがアレンジした多種多様な楽曲や振付が披露される。8月12日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '39',
        ],
        [
          'name' => 'よさこい祭り',
          'eventdate' => '12',
          'time' => '-',
          'prefecture' => '高知',
          'place' => '高知市中央公園',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月9日～8月12日の4日間にわたって開催され、「鳴子（なるこ）」と呼ばれる道具を持った踊り子たちがよさこい節に合わせて市内各地を踊り歩く。それぞれのチームがアレンジした多種多様な楽曲や振付が披露される。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '39',
        ],
        [
          'name' => '京都五山送り火',
          'eventdate' => '16',
          'time' => '20:00',
          'prefecture' => '京都',
          'place' => '京都市内',
          'genre' => 'お祭り・花火大会',
          'description' => '京都の山々にくっきりと浮かび上がる五山の送り火は、祇園祭とともに京都の夏の風物詩となっている。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '26',
        ],
        [
          'name' => '日本ど真ん中祭り',
          'eventdate' => '23',
          'time' => '-',
          'prefecture' => '愛知',
          'place' => '名古屋市',
          'genre' => 'お祭り・花火大会',
          'description' => 'それぞれのチームが情緒ある地域文化を、アレンジした音楽にのせて華やかな衣装をまとい踊ります。8月26日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '23',
        ],
        [
          'name' => '日本ど真ん中祭り',
          'eventdate' => '24',
          'time' => '-',
          'prefecture' => '愛知',
          'place' => '名古屋市',
          'genre' => 'お祭り・花火大会',
          'description' => 'それぞれのチームが情緒ある地域文化を、アレンジした音楽にのせて華やかな衣装をまとい踊ります。8月26日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '23',
        ],
        [
          'name' => '日本ど真ん中祭り',
          'eventdate' => '25',
          'time' => '-',
          'prefecture' => '愛知',
          'place' => '名古屋市',
          'genre' => 'お祭り・花火大会',
          'description' => 'それぞれのチームが情緒ある地域文化を、アレンジした音楽にのせて華やかな衣装をまとい踊ります。8月26日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '23',
        ],
        [
          'name' => '日本ど真ん中祭り',
          'eventdate' => '26',
          'time' => '-',
          'prefecture' => '愛知',
          'place' => '名古屋市',
          'genre' => 'お祭り・花火大会',
          'description' => 'それぞれのチームが情緒ある地域文化を、アレンジした音楽にのせて華やかな衣装をまとい踊ります。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '23',
        ],
        [
          'name' => '原宿表参道元氣祭',
          'eventdate' => '25',
          'time' => '-',
          'prefecture' => '東京',
          'place' => '原宿表参道',
          'genre' => 'お祭り・花火大会',
          'description' => 'よさこいの本場高知の伝統と、流行の最先端である原宿・表参道とが融合した首都圏最大級のお祭り。8月26日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '13',
        ],
        [
          'name' => '原宿表参道元氣祭',
          'eventdate' => '26',
          'time' => '-',
          'prefecture' => '東京',
          'place' => '原宿表参道',
          'genre' => 'お祭り・花火大会',
          'description' => 'よさこいの本場高知の伝統と、流行の最先端である原宿・表参道とが融合した首都圏最大級のお祭り。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '13',
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
