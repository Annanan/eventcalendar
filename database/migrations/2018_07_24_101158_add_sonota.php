<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSonota extends Migration
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
          'name' => '恐竜どうぶつ園 ティラノサウルス×トリケラトプスの戦い',
          'eventdate' => '29',
          'time' => '13:00~、15:30~',
          'prefecture' => '愛媛県',
          'place' => '松山市総合コミュニティセンター',
          'genre' => 'レジャー',
          'description' => '恐竜パペットを使った教育的なパフォーマンスショー。',
          'price' => '3000円',
          'genrenum' => '7',
          'prefecturenum' => '38',
        ],
        [
          'name' => 'RGが90分あるあるを歌い続け藤崎マーケットが90分おるおるモノマネをやり続ける会の実況解説は…浅越ゴエ！',
          'eventdate' => '27',
          'time' => '19:00~',
          'prefecture' => '愛知',
          'place' => '木曽川文化会館　尾西信金ホール',
          'genre' => 'レジャー',
          'description' => 'RGと藤崎マーケットによるお笑いライブ。',
          'price' => '2500円',
          'genrenum' => '7',
          'prefecturenum' => '23',
           ],
           [
          'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '17',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
        ],
        [
          'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '18',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
        ],
        [
          'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '19',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
        ],
        [
 'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '20',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
        ],
        [  
 'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '21',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
           ],
           [
'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '22',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
           ],
           [
'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '23',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
           ],
           [
'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '24',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
           ],
           [
'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '25',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
           ],
           [
'name' => 'リアル謎解きゲーム　茶問屋街の猫と秘密の宇治茶',
          'eventdate' => '26',
          'time' => '0:00~15:00',
          'prefecture' => '京都',
          'place' => '上狛茶問屋ストリート", "レジャー", "大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'genre' => 'レジャー',
          'description' => '大人から子どもまで楽しめる、リアル謎解きゲーム。',
          'price' => '26',
          'genrenum' => '7',
          'prefecturenum' => '26',
           ],
           [
          'name' => '元祖しずくいし軽トラ市',
          'eventdate' => '5',
          'time' => '9:00~13:00',
          'prefecture' => '岩手',
          'place' => '雫石よしゃれ通り商店街',
          'genre' => 'レジャー',
          'description' => '「よしゃれ通り」に並んだ約50台の軽トラックの荷台いっぱいに地元の新鮮野菜や加工品などが積まれ販売される。(※5～11月の原則毎月第1日曜日開催)',
          'price' => '-',
          'genrenum' => '7',
          'prefecturenum' => '3',
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
