<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOngaku3 extends Migration
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
          'name' => 'TRAIANGLE'18',
          'eventdate' => '25',
          'time' => '9:00~20:00',
          'prefecture' => '福岡',
          'place' => '福岡シーサイドももち海浜公園地行浜ビーチ内特設ステージ',
          'genre' => '音楽フェス',
          'description' => 'J-ROCKの代名詞ともいえるアーティストが数多く出演!福岡の夏を盛り上げるのはTRIANGLE'18! 8月25日まで開催予定。',
          'price' => '5500~9000円',
          'genrenum' => '3',
          'prefecturenum' => '40',
        ],
         [
          'name' => 'TRAIANGLE'18',
          'eventdate' => '26',
          'time' => '9:00~20:00',
          'prefecture' => '福岡',
          'place' => '福岡シーサイドももち海浜公園地行浜ビーチ内特設ステージ',
          'genre' => '音楽フェス',
          'description' => 'J-ROCKの代名詞ともいえるアーティストが数多く出演!福岡の夏を盛り上げるのはTRIANGLE'18! 8月25日まで開催予定。',
          'price' => '5500~9000円',
          'genrenum' => '3',
          'prefecturenum' => '40',
        ],
        [
          'name' => 'Westside Outdoor Festival 2018',
          'eventdate' => '25',
          'time' => '-',
          'prefecture' => '岡山',
          'place' => '高梁川南部河川敷',
          'genre' => '音楽フェス',
          'description' => 'チャリティオークションをメインコンテンツとしています。瀬戸大橋や瀬戸内海が一望できる鷲羽山展望台広場での開催が決定。壮大な景色と音楽で楽しい時間を。8月26日まで開催予定。',
          'price' => '-',
          'genrenum' => '3',
          'prefecturenum' => '33',
        ],
        [
          'name' => 'Westside Outdoor Festival 2018',
          'eventdate' => '26',
          'time' => '-',
          'prefecture' => '岡山',
          'place' => '高梁川南部河川敷',
          'genre' => '音楽フェス',
          'description' => 'チャリティオークションをメインコンテンツとしています。瀬戸大橋や瀬戸内海が一望できる鷲羽山展望台広場での開催が決定。壮大な景色と音楽で楽しい時間を。8月26日まで開催予定。',
          'price' => '-',
          'genrenum' => '3',
          'prefecturenum' => '33',
        ],
        [
          'name' => 'KuniRock',
          'eventdate' => '25',
          'time' => '12:00~22:00',
          'prefecture' => '群馬',
          'place' => '野反湖キャンプ場',
          'genre' => '音楽フェス',
          'description' => 'KuniROCK(六合ロック）とは群馬県吾妻郡中之条町六合地区(旧 六合村)にある国立公園の野反湖を舞台に、NATURE, FOOD and MUSIC.をコンセプトとした個人主催の小さなフェスティバルです。KuniROCKには派手な演出や照明はありません、野反湖そのものが壮大な舞台です。　大物を狙って釣りを楽しんでみたり、小川の隅々にいる生き物たちに触れてみたり、季節の野花を写真に収めてみたり、お目当ての出演者の音楽を全身で聴いてみたり、キャンプファイヤーを囲って踊ってみたり、食店舗を全てはしごしてみたり、雄大な自然に流れる特別な時間を一緒に作りましょう。',
          'price' => '4000円',
          'genrenum' => '3',
          'prefecturenum' => '10',
        ],
        [
          'name' => 'KuniRock',
          'eventdate' => '26',
          'time' => '8:00~15:00',
          'prefecture' => '群馬',
          'place' => '野反湖キャンプ場',
          'genre' => '音楽フェス',
          'description' => 'KuniROCK(六合ロック）とは群馬県吾妻郡中之条町六合地区(旧 六合村)にある国立公園の野反湖を舞台に、NATURE, FOOD and MUSIC.をコンセプトとした個人主催の小さなフェスティバルです。KuniROCKには派手な演出や照明はありません、野反湖そのものが壮大な舞台です。　大物を狙って釣りを楽しんでみたり、小川の隅々にいる生き物たちに触れてみたり、季節の野花を写真に収めてみたり、お目当ての出演者の音楽を全身で聴いてみたり、キャンプファイヤーを囲って踊ってみたり、食店舗を全てはしごしてみたり、雄大な自然に流れる特別な時間を一緒に作りましょう。',
          'price' => '4000円',
          'genrenum' => '3',
          'prefecturenum' => '10',
        ],
         [
          'name' => 'RUSH BALL 2018',
          'eventdate' => '25',
          'time' => '9:30~',
          'prefecture' => '大阪',
          'place' => '泉大津市 泉大津フェニックス',
          'genre' => '音楽フェス',
          'description' => '1999年に立ち上がってから20年目。RUSH BALLの歴史はアーカイブを辿ればわかります。いろんな媒体でライブ映像を観たり聴いたりできます。でもその年その年のリアルな様子は行った人にしかわかりません。今年も関西の野外イベントとして、胸を張ってあの場所をROCKします。素晴らしい音と感情と感動が歴史に刻まれるであろう今年の目撃者になってください。 8月26日まで開催予定。',
          'price' => '6500円',
          'genrenum' => '3',
          'prefecturenum' => '27',
        ],
         [
          'name' => 'RUSH BALL 2018',
          'eventdate' => '26',
          'time' => '9:30~',
          'prefecture' => '大阪',
          'place' => '泉大津市 泉大津フェニックス',
          'genre' => '音楽フェス',
          'description' => '1999年に立ち上がってから20年目。RUSH BALLの歴史はアーカイブを辿ればわかります。いろんな媒体でライブ映像を観たり聴いたりできます。でもその年その年のリアルな様子は行った人にしかわかりません。今年も関西の野外イベントとして、胸を張ってあの場所をROCKします。素晴らしい音と感情と感動が歴史に刻まれるであろう今年の目撃者になってください。 8月26日まで開催予定。',
          'price' => '6500円',
          'genrenum' => '3',
          'prefecturenum' => '27',
        ],
         [
          'name' => '908 FESTIVAL',
          'eventdate' => '31',
          'time' => '17:30~',
          'prefecture' => '東京',
          'place' => '日本武道館',
          'genre' => '音楽フェス',
          'description' => '三浦大知や綾香をはじめ、実力派アーティストが数多く出演します。数少ない東京都内でのフェスを堪能しましょう!',
          'price' => '8300円',
          'genrenum' => '3',
          'prefecturenum' => '13',
        ],
        [
          'name' => 'Slow LIVE',
          'eventdate' => '31',
          'time' => '17:30~',
          'prefecture' => '東京',
          'place' => '池上本門寺 野外特設ステージ',
          'genre' => '音楽フェス',
          'description' => 'Slow LIVEは食文化「Slow Food」の考え方を音楽にも当てはめ、音楽もゆっくり楽しもうという願いから2004年に始まり、今年15周年を迎えます。当初は、「Slow Music Slow LIVE」というタイトルでしたが、2015年により呼びやすい「Slow LIVE」に変わりました。毎年数多くの音楽フェスティバルが開催される中で、私たちは「Slow LIVEらしさ」を大切にしています。古き良き伝統を持ち、都会ながら自然に囲まれる池上本門寺で、音楽と食をゆっくり楽しむ。それが私たちの考える「大人のミニフェス」、Slow LIVEです。',
          'price' => '7000円',
          'genrenum' => '3',
          'prefecturenum' => '13',
        ],
        [
          'name' => 'SWEET LOVE SHOWER',
          'eventdate' => '31',
          'time' => '9:00~',
          'prefecture' => '山梨',
          'place' => '山中湖交流プラザきらら',
          'genre' => '音楽フェス',
          'description' => '本イベントは、1996年に日比谷野外大音楽堂でスタートし2007年には山中湖に舞台を移し「富士山を望む山中湖畔という絶好のロケーションでの開催」という事が大きな魅力の一つとなりました。さらに2013年には、山中湖が富士山の構成資産として世界文化遺産に登録された事で「世界文化遺産での野外フェス」として夏の風物詩となって参りました。会場周辺の環境も素晴らしく、観光スポットや温泉の割引など山中湖畔全体を楽しんでいただけるサービスも実施してますので、是非山中湖に宿泊してたくさんの思い出を作ってください。',
          'price' => '10000円',
          'genrenum' => '3',
          'prefecturenum' => '19',
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
