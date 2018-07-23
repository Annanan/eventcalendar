<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOngaku2 extends Migration
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
          'name' => 'ROCK IN JAPAN FESTIVAL 2018',
          'eventdate' => '4',
          'time' => '8:00~19:30',
          'prefecture' => '茨城',
          'place' => '国営ひたち海浜公園',
          'genre' => '音楽フェス',
          'description' => '誰もが知ってる最高にロックなフェスが今年も茨城の地にやってくる！今年も、昨年にも引けを取らない豪華アーティストの出演が決定！最高の仲間と最高にロックな時間をROCK IN JAPANで！2週にわたり、計4日間開催予定。',
          'price' => '14000円',
          'genrenum' => '3',
          'prefecturenum' => '8',
        ],
        [
          'name' => 'ROCK IN JAPAN FESTIVAL 2018',
          'eventdate' => '5',
          'time' => '8:00~19:30',
          'prefecture' => '茨城',
          'place' => '国営ひたち海浜公園',
          'genre' => '音楽フェス',
          'description' => '誰もが知ってる最高にロックなフェスが今年も茨城の地にやってくる！今年も、昨年にも引けを取らない豪華アーティストの出演が決定！最高の仲間と最高にロックな時間をROCK IN JAPANで！2週にわたり、計4日間開催予定。',
          'price' => '14000円',
          'genrenum' => '3',
          'prefecturenum' => '8',
        ],
        [
          'name' => 'ROCK IN JAPAN FESTIVAL 2018',
          'eventdate' => '11',
          'time' => '8:00~19:30',
          'prefecture' => '茨城',
          'place' => '国営ひたち海浜公園',
          'genre' => '音楽フェス',
          'description' => '誰もが知ってる最高にロックなフェスが今年も茨城の地にやってくる！今年も、昨年にも引けを取らない豪華アーティストの出演が決定！最高の仲間と最高にロックな時間をROCK IN JAPANで！2週にわたり、計4日間開催予定。',
          'price' => '14000円',
          'genrenum' => '3',
          'prefecturenum' => '8',
        ],
        [
          'name' => 'ROCK IN JAPAN FESTIVAL 2018',
          'eventdate' => '12',
          'time' => '8:00~19:30',
          'prefecture' => '茨城',
          'place' => '国営ひたち海浜公園',
          'genre' => '音楽フェス',
          'description' => '誰もが知ってる最高にロックなフェスが今年も茨城の地にやってくる！今年も、昨年にも引けを取らない豪華アーティストの出演が決定！最高の仲間と最高にロックな時間をROCK IN JAPANで！2週にわたり、計4日間開催予定。',
          'price' => '14000円',
          'genrenum' => '3',
          'prefecturenum' => '8',
        ],
        [
          'name' => 'S2O JAPAN（EDM）',
          'eventdate' => '4',
          'time' => '12:00~21:00',
          'prefecture' => '東京',
          'place' => 'お台場S2Oウォーターランド',
          'genre' => '音楽フェス',
          'description' => '日本初上陸！タイ発祥の超大型EDMフェスティバル！タイの旧正月の水かけ祭りと音楽をコラボレーションさせたダンスミュージックフェスティバル！大量の水を浴びながら、最高にエキサイトな時間を！8月5日まで開催予定。',
          'price' => '14000円',
          'genrenum' => '3',
          'prefecturenum' => '13',
        ],
         [
          'name' => 'S2O JAPAN（EDM）',
          'eventdate' => '5',
          'time' => '12:00~21:00',
          'prefecture' => '東京',
          'place' => 'お台場S2Oウォーターランド',
          'genre' => '音楽フェス',
          'description' => '日本初上陸！タイ発祥の超大型EDMフェスティバル！タイの旧正月の水かけ祭りと音楽をコラボレーションさせたダンスミュージックフェスティバル！大量の水を浴びながら、最高にエキサイトな時間を！8月5日まで開催予定。',
          'price' => '14000円',
          'genrenum' => '3',
          'prefecturenum' => '13',
        ],
         [
          'name' => 'RISING SUN ROCK FESTIVAL 2018 in EZO',
          'eventdate' => '10',
          'time' => '10:00~23:00',
          'prefecture' => '北海道',
          'place' => '石狩湾新港樽川ふ頭横野外特設ステージ',
          'genre' => '音楽フェス',
          'description' => '1999年から毎年開催されている日本初のオールナイト野外ロックフェスティバル！壮大な大自然に囲まれながら、最高な音楽をあなたへ。8月11日まで開催予定。',
          'price' => '11000円~',
          'genrenum' => '3',
          'prefecturenum' => '1',
        ],
        [
          'name' => 'RISING SUN ROCK FESTIVAL 2018 in EZO',
          'eventdate' => '11',
          'time' => '10:00~23:00',
          'prefecture' => '北海道',
          'place' => '石狩湾新港樽川ふ頭横野外特設ステージ',
          'genre' => '音楽フェス',
          'description' => '1999年から毎年開催されている日本初のオールナイト野外ロックフェスティバル！壮大な大自然に囲まれながら、最高な音楽をあなたへ。8月11日まで開催予定。',
          'price' => '11000円~',
          'genrenum' => '3',
          'prefecturenum' => '1',
        ],
       
       [
          'name' => 'HIGHEST MOUNTAIN',
          'eventdate' => '11',
          'time' => '10:00~',
          'prefecture' => '大阪',
          'place' => '舞洲',
          'genre' => '音楽フェス',
          'description' => 'レゲエ好きなそこのあなた！日本最大級のレゲエフェスが大阪の地に今年もやってくる！記念すべき第20回目はさらに盛り上がること間違いなし！暑い夏をさらに盛り上げたいなら、舞洲に行くっきゃない！',
          'price' => '3900円~',
          'genrenum' => '3',
          'prefecturenum' => '27',
        ],
        [
          'name' => 'EAT THE ROCK',
          'eventdate' => '11',
          'time' => '9:30~19:00',
          'prefecture' => '滋賀',
          'place' => '竜王町総合運動公園内ドラゴンハット',
          'genre' => '音楽フェス',
          'description' => '1999年から毎年開催されている日本初のオールナイト野外ロックフェスティバル！壮大な大自然に囲まれながら、最高な音楽をあなたへ。8月11日まで開催予定。',
          'price' => '11000円~',
          'genrenum' => '3',
          'prefecturenum' => '25',
        ],
         [
          'name' => 'お盆フェス リゾームライブラリーⅦ',
          'eventdate' => '14',
          'time' => '13:00~19:00',
          'prefecture' => '愛知',
          'place' => '岡崎市 図書館交流プラザLibra',
          'genre' => '音楽フェス',
          'description' => '愛知県発祥のロックフェス。これからが楽しみなアーティストが数多く出演します！',
          'price' => '4000円',
          'genrenum' => '3',
          'prefecturenum' => '23',
        ],
         [
          'name' => 'SONICMANIA',
          'eventdate' => '17',
          'time' => '8:00~',
          'prefecture' => '千葉',
          'place' => 'ZOZOマリンスタジアム＆幕張メッセ',
          'genre' => '音楽フェス',
          'description' => 'エレクトロニックな音楽を中心に世界的に有名なアーティストが終結する日本最大級のフェス！MARSHMELLOをはじめ、中田ヤスタカなど注目アーティストが多数出演！',
          'price' => '12000円~',
          'genrenum' => '3',
          'prefecturenum' => '12',
        ],
         [
          'name' => 'EARTH CELEBRATION',
          'eventdate' => '17',
          'time' => '8:00~',
          'prefecture' => '新潟',
          'place' => '佐渡市小木、佐渡全体',
          'genre' => '音楽フェス',
          'description' => '佐渡を拠点に太鼓を中心とした伝統的な音楽芸能に一日中身を置ける貴重な体験ができます。8月19日まで開催予定。',
          'price' => '5000円~',
          'genrenum' => '3',
          'prefecturenum' => '15',
        ],
        [
          'name' => 'EARTH CELEBRATION',
          'eventdate' => '18',
          'time' => '8:00~',
          'prefecture' => '新潟',
          'place' => '佐渡市小木、佐渡全体',
          'genre' => '音楽フェス',
          'description' => '佐渡を拠点に太鼓を中心とした伝統的な音楽芸能に一日中身を置ける貴重な体験ができます。8月19日まで開催予定。',
          'price' => '5000円~',
          'genrenum' => '3',
          'prefecturenum' => '15',
        ],
        [
          'name' => 'EARTH CELEBRATION',
          'eventdate' => '19',
          'time' => '8:00~',
          'prefecture' => '新潟',
          'place' => '佐渡市小木、佐渡全体',
          'genre' => '音楽フェス',
          'description' => '佐渡を拠点に太鼓を中心とした伝統的な音楽芸能に一日中身を置ける貴重な体験ができます。8月19日まで開催予定。',
          'price' => '5000円~',
          'genrenum' => '3',
          'prefecturenum' => '15',
        ],
        [
          'name' => 'MUSIC CIRCUS FUKUOKA partner with SoftBank HAWKS',
          'eventdate' => '18',
          'time' => '22:00~05:30',
          'prefecture' => '福岡',
          'place' => 'ヤフオク!ーム',
          'genre' => '音楽フェス',
          'description' => '福岡で開催される大型EDMフェス。今回は、MUSIC CIRCUSの主催するイベント史上トップクラスのラインナップ！バウンス系のトップDJが数多く出演！その中でもVINAIは最もホットなDJユニットで、世界中のパリピを熱狂させる！福岡の最高のナイトライフをヤフオク!ドームで。',
          'price' => '8800円~',
          'genrenum' => '3',
          'prefecturenum' => '40',
        ],
         [
          'name' => 'GOOD NEIGHBORS JAMBOREE',
          'eventdate' => '18',
          'time' => '11:00~21:00',
          'prefecture' => '鹿児島',
          'place' => '南九州市 かわなべ森の学校',
          'genre' => '音楽フェス',
          'description' => '大人と子供で楽しむ真夏フェス。音楽、アート、食、文学などジャンルを超えて、様々なコンテンツを用意。鹿児島だけでなく、全国各地から旅人たちが参加します。新たな出会いを求めている方、家族や友人と非日常を体験したい方にお勧めです。',
          'price' => '5000円~',
          'genrenum' => '3',
          'prefecturenum' => '46',
        ],
         [
          'name' => 'SUMMER SONIC 2018',
          'eventdate' => '18',
          'time' => '9:00~',
          'prefecture' => '千葉',
          'place' => 'ZOZOマリンスタジアム＆幕張メッセ',
          'genre' => '音楽フェス',
          'description' => 'もはや夏フェスの代名詞といっても過言ではない。世界中から集まる豪華アーティストはあなたの夏をさらに暑くするだろう。夏のど真ん中で心も体もホットになろうぜ！8月19日まで開催予定。',
          'price' => '16000円~',
          'genrenum' => '3',
          'prefecturenum' => '12',
        ],
         [
          'name' => 'SUMMER SONIC 2018',
          'eventdate' => '19',
          'time' => '10:00~',
          'prefecture' => '大阪',
          'place' => '舞洲SONIC PARK(舞洲スポーツアイランド)',
          'genre' => '音楽フェス',
          'description' => 'もはや夏フェスの代名詞といっても過言ではない。世界中から集まる豪華アーティストはあなたの夏をさらに暑くするだろう。夏のど真ん中で心も体もホットになろうぜ！8月19日まで開催予定。',
          'price' => '14500円~',
          'genrenum' => '3',
          'prefecturenum' => '27',
        ],
         [
          'name' => 'SUMMER SONIC 2018',
          'eventdate' => '18',
          'time' => '10:00~',
          'prefecture' => '大阪',
          'place' => '舞洲SONIC PARK(舞洲スポーツアイランド)',
          'genre' => '音楽フェス',
          'description' => 'もはや夏フェスの代名詞といっても過言ではない。世界中から集まる豪華アーティストはあなたの夏をさらに暑くするだろう。夏のど真ん中で心も体もホットになろうぜ！8月19日まで開催予定。',
          'price' => '14500円~',
          'genrenum' => '3',
          'prefecturenum' => '27',
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
