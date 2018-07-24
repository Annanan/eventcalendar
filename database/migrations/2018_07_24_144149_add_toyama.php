<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToyama extends Migration
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
          'name' => 'ホットフィールド',
          'eventdate' => '4',
          'time' => '9:30~22:00',
          'prefecture' => '富山',
          'place' => '黒部市宮野運動公園',
          'genre' => '音楽フェス',
          'description' => '夏の太陽の下に響く音楽に身体を揺らし、フカフカの芝生の上で寝転び、 時には涼しい木陰で一休憩という非日常。 ホットフィールドに来ないとわからない、簡単な言葉では形容できない素晴らしい時間と空間。思い思いの自由なスタイルで「音楽」を楽しめる場所がそこにはあります。音楽という一つのテーマを通して、きっとそこに集まるみんなで大きな感動を共有できるでしょう。8月5日まで開催予定。',
          'price' => '6945円',
          'genrenum' => '3',
          'prefecturenum' => '16',
        ],
        [
          'name' => 'ホットフィールド',
          'eventdate' => '5',
          'time' => '9:30~22:00',
          'prefecture' => '富山',
          'place' => '黒部市宮野運動公園',
          'genre' => '音楽フェス',
          'description' => '夏の太陽の下に響く音楽に身体を揺らし、フカフカの芝生の上で寝転び、 時には涼しい木陰で一休憩という非日常。 ホットフィールドに来ないとわからない、簡単な言葉では形容できない素晴らしい時間と空間。思い思いの自由なスタイルで「音楽」を楽しめる場所がそこにはあります。音楽という一つのテーマを通して、きっとそこに集まるみんなで大きな感動を共有できるでしょう。8月5日まで開催予定。',
          'price' => '6945円',
          'genrenum' => '3',
          'prefecturenum' => '16',
        ],
        [
          'name' => 'SUKIYAKI MEETS THE WORLD 2018',
          'eventdate' => '24',
          'time' => '19:00~23:50',
          'prefecture' => '富山',
          'place' => '福野文化創造センター ヘリオス',
          'genre' => '音楽フェス',
          'description' => '世界のワールドミュージック＆カルチャーのキョーレツなバイブレーションを一挙に浴びまくる3日間。8月26日まで開催予定。',
          'price' => '5000円~8000円',
          'genrenum' => '3',
          'prefecturenum' => '16',
        ],
        [
          'name' => 'SUKIYAKI MEETS THE WORLD 2018',
          'eventdate' => '25',
          'time' => '19:00~23:50',
          'prefecture' => '富山',
          'place' => '福野文化創造センター ヘリオス',
          'genre' => '音楽フェス',
          'description' => '世界のワールドミュージック＆カルチャーのキョーレツなバイブレーションを一挙に浴びまくる3日間。8月26日まで開催予定。',
          'price' => '5000円~8000円',
          'genrenum' => '3',
          'prefecturenum' => '16',
        ],
        [
          'name' => 'SUKIYAKI MEETS THE WORLD 2018',
          'eventdate' => '26',
          'time' => '19:00~23:50',
          'prefecture' => '富山',
          'place' => '福野文化創造センター ヘリオス',
          'genre' => '音楽フェス',
          'description' => '世界のワールドミュージック＆カルチャーのキョーレツなバイブレーションを一挙に浴びまくる3日間。8月26日まで開催予定。',
          'price' => '5000円~8000円',
          'genrenum' => '3',
          'prefecturenum' => '16',
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
