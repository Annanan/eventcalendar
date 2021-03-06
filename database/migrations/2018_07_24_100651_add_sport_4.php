<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSport4 extends Migration
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
          'name' => '中日-巨人',
          'eventdate' => '5',
          'time' => '14:00',
          'prefecture' => '愛知',
          'place' => 'ナゴヤドーム',
          'genre' => 'スポーツ',
          'description' => '「真夏の原点スペシャル」来場のファンクラブゴールド・レギュラー・ジュニア会員様先着7000名様に「原点ペナント」をプレゼント！配布された「原点ペナント」をお持ちの方限定で試合終了後にグラウンドウォーク開催',
          'price' => '中日ドラゴンズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '23',
        ],
        [
          'name' => '中日-ヤクルト',
          'eventdate' => '10',
          'time' => '18:00',
          'prefecture' => '愛知',
          'place' => 'ナゴヤドーム',
          'genre' => 'スポーツ',
          'description' => '「BLUE SUMMER SERIES 2018」　来場者全員にジェット風船、青色に光り輝く「青春スティック」をプレゼント！',
          'price' => '中日ドラゴンズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '23',
        ],
        [
          'name' => '中日-ヤクルト',
          'eventdate' => '11',
          'time' => '14:00',
          'prefecture' => '愛知',
          'place' => 'ナゴヤドーム',
          'genre' => 'スポーツ',
          'description' => '「BLUE SUMMER SERIES 2018」　来場者全員にジェット風船をプレゼント！',
          'price' => '中日ドラゴンズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '23',
        ],
        [
          'name' => '中日-ヤクルト',
          'eventdate' => '12',
          'time' => '14:00',
          'prefecture' => '愛知',
          'place' => 'ナゴヤドーム',
          'genre' => 'スポーツ',
          'description' => '「BLUE SUMMER SERIES 2018」　来場者全員にジェット風船、昇竜レプリカユニフォームをプレゼント！',
          'price' => '中日ドラゴンズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '23',
        ],
        [
          'name' => 'DeNA-巨人',
          'eventdate' => '1',
          'time' => '17:45',
          'prefecture' => '神奈川',
          'place' => '横浜スタジアム',
          'genre' => 'スポーツ',
          'description' => '「YOKOHAMA STAR☆NIGHT」',
          'price' => '横浜DeNAベイスターズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => 'DeNA-巨人',
          'eventdate' => '2',
          'time' => '17:45',
          'prefecture' => '神奈川',
          'place' => '横浜スタジアム',
          'genre' => 'スポーツ',
          'description' => '「YOKOHAMA STAR☆NIGHT」',
          'price' => '横浜DeNAベイスターズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => 'DeNA-阪神',
          'eventdate' => '10',
          'time' => '18:00',
          'prefecture' => '神奈川',
          'place' => '横浜スタジアム',
          'genre' => 'スポーツ',
          'description' => '「勝祭」',
          'price' => '横浜DeNAベイスターズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => 'DeNA-阪神',
          'eventdate' => '11',
          'time' => '18:00',
          'prefecture' => '神奈川',
          'place' => '横浜スタジアム',
          'genre' => 'スポーツ',
          'description' => '「勝祭」',
          'price' => '横浜DeNAベイスターズ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => 'DeNA-阪神',
          'eventdate' => '12',
          'time' => '18:00',
          'prefecture' => '神奈川',
          'place' => '横浜スタジアム',
          'genre' => 'スポーツ',
          'description' => '「勝祭」',
          'price' => '横浜DeNAベイスターズ公式サイト',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => 'J1湘南-神戸',
          'eventdate' => '19',
          'time' => '19:00',
          'prefecture' => '神奈川',
          'place' => 'shonan BMW スタジアム平塚',
          'genre' => 'スポーツ',
          'description' => '関西の神戸を本拠地とするヴィッセルにとって　アンドレス・イニエスタ選手が加入してから初めての関東エリアでの試合！　イニエスタ選手の華麗なプレーが関東のサッカ－ファンにお披露目される。（イニエスタ選手出場予定）',
          'price' => '湘南ベルマーレ公式サイト参照',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => '侍ジャパン壮行試合',
          'eventdate' => '28',
          'time' => '17:45',
          'prefecture' => '東京',
          'place' => '明治神宮野球場',
          'genre' => 'スポーツ',
          'description' => '2018年9月に宮崎県で開催される「第12回BFA U18アジア野球選手権大会」に出場する侍ジャパンU-18代表の壮行試合として、高校（Uー18）日本代表VS大学日本代表が開催される。',
          'price' => '1000円~',
          'genrenum' => '5',
          'prefecturenum' => '13',
        ],
        [
          'name' => 'Friends on Ice 2018',
          'eventdate' => '24',
          'time' => '18:30',
          'prefecture' => '神奈川',
          'place' => 'KOSE新横浜スケートセンター',
          'genre' => 'スポーツ',
          'description' => '荒川静香が中心となり企画プロデュースしているアイスショーで2007年から毎年開催されている。「未来を担う子どもたちに夢と希望を与えたい」という考えのもと、子どもスケーターのコーナーがある。出演者:荒川静香、 髙橋大輔、 村上佳菜子、 宇野昌磨、 本田武史、 鈴木明子、 無良崇人、 佐藤有香、 安藤美姫、 ジェレミー・アボット、 イリーナ・スルツカヤ、 メリル・デイヴィス＆チャーリー・ホワイト、 チン・パン＆ジャン・トン、 シェイリーン・ボーン、 ステファン・ランビエル　他',
          'price' => '8000円~',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => 'Friends on Ice 2018',
          'eventdate' => '25',
          'time' => '11:30',
          'prefecture' => '神奈川',
          'place' => 'KOSE新横浜スケートセンター',
          'genre' => 'スポーツ',
          'description' => '荒川静香が中心となり企画プロデュースしているアイスショーで2007年から毎年開催されている。「未来を担う子どもたちに夢と希望を与えたい」という考えのもと、子どもスケーターのコーナーがある。出演者:荒川静香、 髙橋大輔、 村上佳菜子、 宇野昌磨、 本田武史、 鈴木明子、 無良崇人、 佐藤有香、 安藤美姫、 ジェレミー・アボット、 イリーナ・スルツカヤ、 メリル・デイヴィス＆チャーリー・ホワイト、 チン・パン＆ジャン・トン、 シェイリーン・ボーン、 ステファン・ランビエル　他',
          'price' => '8000円~',
          'genrenum' => '5',
          'prefecturenum' => '14',
        ],
        [
          'name' => 'Friends on Ice 2018',
          'eventdate' => '26',
          'time' => '12:30',
          'prefecture' => '神奈川',
          'place' => 'KOSE新横浜スケートセンター',
          'genre' => 'スポーツ',
          'description' => '荒川静香が中心となり企画プロデュースしているアイスショーで2007年から毎年開催されている。「未来を担う子どもたちに夢と希望を与えたい」という考えのもと、子どもスケーターのコーナーがある。出演者:荒川静香、 髙橋大輔、 村上佳菜子、 宇野昌磨、 本田武史、 鈴木明子、 無良崇人、 佐藤有香、 安藤美姫、 ジェレミー・アボット、 イリーナ・スルツカヤ、 メリル・デイヴィス＆チャーリー・ホワイト、 チン・パン＆ジャン・トン、 シェイリーン・ボーン、 ステファン・ランビエル　他',
          'price' => '8000円~',
          'genrenum' => '5',
          'prefecturenum' => '14',
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
