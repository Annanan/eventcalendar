<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOmatsuri extends Migration
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
          'name' => '長岡まつり大花火大会',
          'eventdate' => '2',
          'time' => '19:20~21:10',
          'prefecture' => '新潟',
          'place' => '長岡市長生橋下流、信濃川河川敷',
          'genre' => 'お祭り・花火大会',
          'description' => '日本有数の花火師が集結する日本三大花火大会のひとつに数えられる花火大会。名物の正三尺玉の3連発は圧巻。8月3日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '15',
        ],
        [
          'name' => '長岡まつり大花火大会',
          'eventdate' => '3',
          'time' => '19:20~21:10',
          'prefecture' => '新潟',
          'place' => '長岡市長生橋下流、信濃川河川敷',
          'genre' => 'お祭り・花火大会',
          'description' => '日本有数の花火師が集結する日本三大花火大会のひとつに数えられる花火大会。名物の正三尺玉の3連発は圧巻。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '15',
        ],
        [
          'name' => 'いたばし花火大会',
          'eventdate' => '4',
          'time' => '19:00~20:30',
          'prefecture' => '東京',
          'place' => '荒川河川敷',
          'genre' => 'お祭り・花火大会',
          'description' => '最大の見せ場は長さ700ｍに及ぶ「大ナイアガラの滝」。さらにフィナーレには、視界いっぱいに広がる「天空のナイアガラ」が打ち上げられる。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '13',
        ],
        [
          'name' => '江戸川区花火大会',
          'eventdate' => '4',
          'time' => '19:15~20:30',
          'prefecture' => '東京',
          'place' => '江戸川河川敷',
          'genre' => 'お祭り・花火大会',
          'description' => '異なる8つのテーマで、それぞれのテーマのイメージに沿ったBGMに乗せて打ち上げられる。5秒で1000発を打ち上げるオープニングや金銀の線が垂れ下がるような金冠でフィナーレは圧巻。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '13',
        ],
        [
          'name' => '仙台七夕花火祭',
          'eventdate' => '5',
          'time' => '19:00~20:30',
          'prefecture' => '宮城',
          'place' => '仙台市青葉区',
          'genre' => 'お祭り・花火大会',
          'description' => '仙台七夕まつりの前夜祭として長い間親しまれている。杜の都仙台街並みから見る花火は圧巻。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '4',
        ],
        [
          'name' => '筑後川花火大会',
          'eventdate' => '5',
          'time' => '19:10~21:40',
          'prefecture' => '福岡',
          'place' => '久留米市水天宮下河川敷対岸',
          'genre' => 'お祭り・花火大会',
          'description' => '1650年(慶安3年)の水天宮落成祝賀を始まりとし、350年以上の歴史を持つ久留米市の花火大会。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '40',
        ],
        [
          'name' => 'なにわ淀川区花火大会',
          'eventdate' => '4',
          'time' => '19:40~20:40',
          'prefecture' => '大阪',
          'place' => '大阪市淀川河川敷',
          'genre' => 'お祭り・花火大会',
          'description' => '30回の節目となる今回は、これまでにない趣向を企画している。視界全体を覆う圧倒的な迫力の花火が、大阪の夜を彩る。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '27',
        ],
        [
          'name' => 'びわ湖大花火大会',
          'eventdate' => '7',
          'time' => '19:30 ~20:30',
          'prefecture' => '滋賀',
          'place' => '滋賀県営大津港沖水面一帯',
          'genre' => 'お祭り・花火大会',
          'description' => '琵琶湖の夏の風物詩となっている、びわ湖大花火大会。約35万人もの人出で湖畔が賑わう中、豊かな自然を背景に夜空に咲く花火は必見。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '25',
        ],
        [
          'name' => '東京花火大祭～EDOMODE～',
          'eventdate' => '11',
          'time' => '19:15 ~20:30',
          'prefecture' => '東京',
          'place' => 'お台場海浜公園',
          'genre' => 'お祭り・花火大会',
          'description' => '今年初開催の花火大会。 伝統的な江戸文化と最先端の東京を融合させた新しいコンセプトで東京の夜空を彩る。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '13',
        ],
        [
          'name' => '阿波踊り',
          'eventdate' => '12',
          'time' => '-',
          'prefecture' => '徳島',
          'place' => '徳島市',
          'genre' => 'お祭り・花火大会',
          'description' => '日本三大盆踊りのひとつ。400年以上も続く歴史あるお祭りで、日本の伝統芸能として国外にも認知されている。8月15日まで開催。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '36',
        ],
        [
          'name' => '阿波踊り',
          'eventdate' => '13',
          'time' => '-',
          'prefecture' => '徳島',
          'place' => '徳島市',
          'genre' => 'お祭り・花火大会',
          'description' => '日本三大盆踊りのひとつ。400年以上も続く歴史あるお祭りで、日本の伝統芸能として国外にも認知されている。8月15日まで開催。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '36',
        ],
        [
          'name' => '阿波踊り',
          'eventdate' => '14',
          'time' => '-',
          'prefecture' => '徳島',
          'place' => '徳島市',
          'genre' => 'お祭り・花火大会',
          'description' => '日本三大盆踊りのひとつ。400年以上も続く歴史あるお祭りで、日本の伝統芸能として国外にも認知されている。8月15日まで開催。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '36',
        ],
        [
          'name' => '阿波踊り',
          'eventdate' => '15',
          'time' => '-',
          'prefecture' => '徳島',
          'place' => '徳島市',
          'genre' => 'お祭り・花火大会',
          'description' => '日本三大盆踊りのひとつ。400年以上も続く歴史あるお祭りで、日本の伝統芸能として国外にも認知されている。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '36',
        ],
        [
          'name' => 'ねぶた祭り',
          'eventdate' => '2',
          'time' => '-',
          'prefecture' => '青森',
          'place' => '青森市青森県周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月2日から7日までの6日間、青森市内の目抜き通りを「ねぶた」と呼ばれる大型の張りぼて人形を乗せた山車が駆け巡る。日本を代表するお祭りで、観客数は6日間でのべ400万人にものぼる。8月7日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '2',
        ],
        [
          'name' => 'ねぶた祭り',
          'eventdate' => '3',
          'time' => '-',
          'prefecture' => '青森',
          'place' => '青森市青森県周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月2日から7日までの6日間、青森市内の目抜き通りを「ねぶた」と呼ばれる大型の張りぼて人形を乗せた山車が駆け巡る。日本を代表するお祭りで、観客数は6日間でのべ400万人にものぼる。8月7日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '2',
        ],
        [
          'name' => 'ねぶた祭り',
          'eventdate' => '4',
          'time' => '-',
          'prefecture' => '青森',
          'place' => '青森市青森県周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月2日から7日までの6日間、青森市内の目抜き通りを「ねぶた」と呼ばれる大型の張りぼて人形を乗せた山車が駆け巡る。日本を代表するお祭りで、観客数は6日間でのべ400万人にものぼる。8月7日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '2',
        ],
        [
          'name' => 'ねぶた祭り',
          'eventdate' => '5',
          'time' => '-',
          'prefecture' => '青森',
          'place' => '青森市青森県周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月2日から7日までの6日間、青森市内の目抜き通りを「ねぶた」と呼ばれる大型の張りぼて人形を乗せた山車が駆け巡る。日本を代表するお祭りで、観客数は6日間でのべ400万人にものぼる。8月7日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '2',
        ],
        [
          'name' => 'ねぶた祭り',
          'eventdate' => '6',
          'time' => '-',
          'prefecture' => '青森',
          'place' => '青森市青森県周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月2日から7日までの6日間、青森市内の目抜き通りを「ねぶた」と呼ばれる大型の張りぼて人形を乗せた山車が駆け巡る。日本を代表するお祭りで、観客数は6日間でのべ400万人にものぼる。8月7日まで開催予定。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '2',
        ],
        [
          'name' => 'ねぶた祭り',
          'eventdate' => '7',
          'time' => '-',
          'prefecture' => '青森',
          'place' => '青森市青森県周辺',
          'genre' => 'お祭り・花火大会',
          'description' => '毎年8月2日から7日までの6日間、青森市内の目抜き通りを「ねぶた」と呼ばれる大型の張りぼて人形を乗せた山車が駆け巡る。日本を代表するお祭りで、観客数は6日間でのべ400万人にものぼる。',
          'price' => '-',
          'genrenum' => '2',
          'prefecturenum' => '2',
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
